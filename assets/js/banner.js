$('#nav').affix({offset: {top: $('header').height()}});	
$('#sidebar').affix({offset: {top: 200}});	

<script type="text/javascript">
  $(document).ready(function(){
  $('#votacion').submit(function(e){
    e.preventDefault();

    var url=$(this).attr('action');
    var metodo=$(this).attr('method');
    var datos=$(this).serialize();


    if(validacion()==true){

        $.ajax({
          url:url,
          type:metodo,
          data:datos,


          success:function(data){
            //alert('Correcto');
            
            //window.location.href=data;
            inputs();
          }
        });
    }else{
      alert('Por favor complete los campos');
    }

   

  });

    function validacion(){
      var valor='';
      var error=0;

      $(':text').each(function(){

          valor=$(this).val();
          if (valor=='' || valor==null) {
            $(this).parent().attr('class','form-group has-error');
            $(this).focus();
            error++;

          }
          else{
            $(this).parent().attr('class','form-group');
          }
      });

      if (error===0) {
        return true;
      }else{
        return false;
      }
    }

    function inputs(){

      var word=$('#coso').val();
      for (var i = 0; i<word.length; i++) {
        var array = word.split("");
          alert(array[i]);
        alert($('#'+i+'').val().match());
      }
      alert(answer);
      
    }

});
</script>