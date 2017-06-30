require([ 'jquery', 'bootstrap' , 'sweetalert'], function ($) {



$('#btn_guardar').click(function () {
    let nombre  =$('#in_campo_nombre').val(); 
let descripcion =$('#in_campo_descripcion').val(); 
let valor  =$('#in_campo_valor').val();
let data =[];
     let campos_vacios = [];
        let campos = "";
        $.each($('[id^=in_campo_]'), function (key, elemento) {
           
            let campo = $(this);
             data.push({id: campo.data('id') ,'valor': campo.val()});
            campos = campos + '"' + campo.data('id') + '":"' + campo.val() + '",';
            if (!campo.val()) {
              
                    campos_vacios.push(campo.parent().parent().children('label').html());

            }

                 if (campos_vacios.length) {
                    swal('Error', 'debe de ingresar todos los datos', 'warning');
                 }else{

                     sessionStorage.setItem('datos' , JSON.stringify(data));
                   swal('Exito', 'La informacion ha sido almacenada en sessionStorage', 'success'); 
                     $('#registro').modal('hide'); 
                 }

        });
}) ;

});
 

  