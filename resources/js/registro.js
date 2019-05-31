$(document).ready(function(){
    function postToGoogle() {
        if( !$("#nombreforma").val() || !$("#emailforma").val() ) {
            swal({
                  title: "Datos incompletos",
                  confirmButtonColor: "#FFDE25"
                });
        }else {
            
            $.ajax({
                url: "https://docs.google.com/forms/d/e/1FAIpQLSdIFI-L1hATs8q4B8eXkbRolWnA5fijT1CjlXqctX7e-QPKsg/formResponse",
                data: {
                    "entry.1325344519" : $("#nombreforma").val(), 
                    "entry.1762032878" : $("#emailforma").val(), 
                    "entry.684909263" : $("#messageforma").val()
                },
                type: "POST",
                dataType: "xml",
                statusCode: {
                    0: function() {
                        //Success message
                        swal({
                          title: "Registro completo",
                          confirmButtonColor: "#FFDE25"
                        }, function(){
                            console.log('super redirección 1')
                            window.location.href = 'http://terry.com.mx/uniendo-diferencias.html';
                        });
                    },
                    200: function() {
                        //Success Message
                        swal({
                          title: "Registro completo",
                          confirmButtonColor: "#FFDE25"
                        }, function(){
                            console.log('super redirección 2')
                            window.location.href = 'http://terry.com.mx/uniendo-diferencias.html';
                        });
                    }
                }
            });
        }
    }
    $( ".enviarForma" ).click(function( event ) {
        $( ".enviarForma" ).prop("disabled",false);
        postToGoogle();
        event.preventDefault();
    });
});   