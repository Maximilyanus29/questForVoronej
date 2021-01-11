<?php
namespace frontend\controllers;

use common\models\Band;
use common\models\Length;
use common\models\ProductParent;
use common\models\Category;
use common\models\Product;
use common\models\ProductCRUD;
use common\models\Thickness;
use frontend\models\ChangeProduct;
use frontend\models\FilterProduct;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\SearchProduct;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */


    public function actionIndex()
    {
//        $getParams = Yii::$app->request->get('GoodsSearch');
//
//        if ($getParams != null){
//
//            return "true";
//        }


        $model = ProductParent::find()->all();

        //Пагинацию знаю как делать, но не успел, могу и в ручную сделать без помощи виджета и по своему запросу


        return $this->render('index', [
            'model'=>$model,


        ]);


    }


    public function actionView($url)
    {

        $this->layout='goods';

        $goods=ProductParent::findOne(['url'=>$url]);

        if (!isset($goods)){
            return $this->render('error',[
                'name'=>"Ошибка",
                'message'=>"Нет такого товара",
            ]);
        }

        $connection = \Yii::$app->db;

        $products_list = $connection->createCommand('
             SELECT p.*,len.value as length, b.value as band, th.value as thinkness
             from product as p 
             LEFT JOIN length as len on p.length = len.id 
             left join band as b on p.band = b.id 
             left join thickness as th on p.thickness = th.id 
             WHERE p.parent_id = :id
')
            ->bindValue(':id',$goods->id)
            ->queryAll();


//        отфильтровать по количеству если кол во 0
        $products_list_in_stock = array_filter($products_list, function($v) {
            return $v['quantity'] != 0;
        });

        $active_product=$products_list_in_stock[0]??null;


        $list_length = $connection->createCommand('
            select product.*, length.id as length_id, length.value as length_value FROM product 
            left join length ON product.length = length.id WHERE parent_id = :id group by length.value 
')
            ->bindValue(':id',$goods->id)
            ->queryAll();

        $list_band = $connection->createCommand('
            select product.*, band.id as band_id,  band.value as band_value FROM product  
            left join band ON product.band = band.id WHERE parent_id = :id group by band.value 
')
            ->bindValue(':id',$goods->id)
            ->queryAll();


        $list_thickness = $connection->createCommand('
            select product.*, thickness.id as thickness_id, thickness.value as thickness_value FROM product 
            left join thickness ON product.thickness = thickness.id WHERE parent_id = :id group by thickness.value 
')
            ->bindValue(':id',$goods->id)
            ->queryAll();




        return $this->render('view', [
            'goods'=>$goods,
            'list_length'=>$list_length,
            'list_band'=>$list_band,
            'list_thickness'=>$list_thickness,
            'products_list_in_stock'=>$products_list_in_stock,
//            'products_list_in_stock'=>$products_list_in_stock,
            'products_list'=>$products_list,
            'active_product' =>$active_product,

        ]);


    }



//аякс запрос при клике на параметр товара
    public function actionGetProduct()
    {

        $request = Yii::$app->request;


        if($request->isPost) {

            $model = new ChangeProduct();

            $data = $model->buildModel($request->bodyParams);

            Yii::$app->response->format = Response::FORMAT_JSON;

            return $data;







            //{"status":true,
            //"goods_id":112,
            //"price":920,
            //"count":0,
            //"handbookGoods":["67","88","419"],
            //"handbook":{"9":["66","67"],"11":["91","89","87","88","90"],"19":["417","420","419","418","423"]}}

        }
//        SELECT p.*,len.value as length, b.value as band, th.value as thinkness from product as p LEFT JOIN length as len on p.length = len.id left join band as b on p.band = b.id left join thickness as th on p.thickness = th.id WHERE p.parent_id = 1

    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
