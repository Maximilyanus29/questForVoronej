<?php

use yii\db\Migration;

/**
 * Class m201229_122128_product
 */
class m201229_122128_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'vendor_code' => $this->string(30)->notNull()->unique(),
            'price' => $this->integer(11)->notNull(),
            'width' => $this->tinyInteger(1)->notNull(),
            'height' => $this->tinyInteger(1)->notNull(),
            'lenght' => $this->tinyInteger(1)->notNull(),
            'on_warehouse' => $this->tinyInteger(1)->notNull(),
            'in_category' => $this->integer(5)->notNull(),
        ]);
//        $this->alterColumn('product','id',$this->integer().'NOT NULL AUTO_INCREMENT');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201229_122128_product cannot be reverted.\n";
        $this->dropTable('product');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201229_122128_product cannot be reverted.\n";

        return false;
    }
    */
}
