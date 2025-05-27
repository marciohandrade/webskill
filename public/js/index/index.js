$(function(){
   
    
    $("#tel").mask("(00) 0000-0000");
    $("#cel").mask("(00) 00000-0000");
    
    $("#email" ).blur(function() {
      
      var email = $("#email").val();
      
      
        if (email !== "") {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var emailaddress = $("#email").val();
            if (!emailReg.test(emailaddress)) {

                $('#email').val("");
                $("#email").addClass("erro");
                $("#email").addClass("required");
                $("#email").focus();
                return false;
                
            } else {

                $("#email").removeClass("error");
                $("#email").removeClass("required");
            }
        }

    });
    
    
   
    $('#btnenviar').on('click',function()
  {
    $(this).text('Enviando ...')
      .attr('disabled','disabled');
      
       $('#formcontato').submit();
       
      $(this).text('Enviar')
      .removeAttr("disabled");
       
  });
   

    
    $('#formcontato').submit(function (e)
    {
        e.preventDefault();
        
        // inicio
        
        /*jQuery.fn.preventDoubleSubmission = function () {
            $(this).on('submit', function (e) {
                var $form = $(this);

                if ($form.data('submitted') === true) {
                    // Previously submitted - don't submit again
                    alert('Form already submitted. Please wait.');
                    e.preventDefault();
                } else {
                    // Mark it so that the next submit can be ignored
                    // ADDED requirement that form be valid
                    if($form.valid()) {
                        $form.data('submitted', true);
                    }
                }
            });
        */

            // Keep chainability
          
        //return this;
        //};
        
        
        // fim
        
        
        // $(this).find(':submit').attr('disabled','disabled');
        
        /* $("input[type='submit']", this)
                .text("Please Wait...")
                .attr('disabled', 'disabled');
                
        return true;
        */      
        
        if (ValidarCampos()) {
             
            $.ajax({
                url: 'enviarcontato',
                type: 'POST',
                data: {
                    'itens': {
                        nome: $('#nome').val(),
                        empresa: $('#empresa').val(),
                        email: $('#email').val(),
                        tel: $('#tel').val(),
                        cel: $('#cel').val(),
                        assunto: $('#assunto').val(),
                        mensagem: $("#mensagem").val()
                    },
                  '_token': $('meta[name="csrf-token"]').attr('content')
                },
                dataType: "json",
                beforeSend: function() {                                
                    $("btnenviar").text("Aguarde...");
                    $("btnenviar").prop('disabled', true);                                       
                }, 
                success: function (data) {

                    if (data[0] === "ok") {
                        
                        $(':input').val('');
                        $('#msgretorno').text("E-mail enviado com sucesso !!");
                        $('#msgfim').text("Muito Obrigado, breve entraremos em contato.");
                        $('#modalcontato').modal('show');
                    }else{
                        
                        $('#msgretorno').text("Não foi possível enviar o e-mail");
                        $('#msgfim').text("Por favor, tente novamente. Obrigado");
                        $('#modalcontato').modal('show');
                    }
                    
                    $("#btnenviar").removeAttr("disabled");;
                    $("#btnenviar").text('Enviar');
                    $(':input').val('');
                }
            });

        } else {
            
            alert("Por favor, preencher todos os campos obrigatórios.");
            return false;
        }

    })  
    
    function ValidarCampos(){
      
      var nome, empresa, email,cel, assunto, mensagem;
      
      
      nome = $("#nome").val();
      empresa = $("#empresa").val();
      email = $("#email").val();
      assunto = $("#assunto").val();
      mensagem = $("#mensagem").val();
      cel = ($("#cel").val().length <=14)? $("#cel").val(""):$("#cel").val();
      
      if(nome === "" || empresa === "" || email === "" || assunto === "" || mensagem === ""){
        return false;      
      }else{
          return true;
      }
      
  }
  
  
    
});