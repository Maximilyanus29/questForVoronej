window.onload = ()=>
{



    const form = document.querySelector('#form');

    const input = (e)=>
    {
        console.log(e.target.parentNode);

        $data = $('#form').serialize(e.target.parentNode);

        console.log($data);





        fetch('index.php?r=site%2Fsearchajax&'+$data)
            .then((response) => {
                return response.json();
            })
            .then((data) => {

                console.log(data);
                const vendor = document.querySelector('#vendor');
                const sklad = document.querySelector('#sklad');
                const price = document.querySelector('#price');

                if (data.length>1)
                {
                    vendor.value=data[0]['vendor_code'];
                    sklad.value=data[0]['on_warehouse'];
                    price.value=data[0]['price'];
                }
                // else if(data.length==1){
                //     vendor.value=data['vendor_code'];
                //     sklad.value=data['on_warehouse'];
                //     price.value=data['price'];
                // }
                else{
                    vendor.value="Нету";
                    sklad.value="Нету";
                    price.value="Нету";
                }



            });


    }


    for(let elem of form.childNodes)
    {
        elem.addEventListener('change',input)
        console.log();
    }
    // console.log(form)







}