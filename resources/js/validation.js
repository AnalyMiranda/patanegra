$(document).ready(function() {
    //AGE VALIDATION
    $('#day').focus();
    function ageLength(){
        $('.inputs').keydown(function(e){
            if(e.keyCode == 8){
                if($(this).val().length == 0){
                    $(this).prev(".inputs").focus();
                }
            }
        });
        $('.inputs').keyup(function(){
            if (this.value.length == this.maxLength) {
               $(this).next('.inputs').focus();
            }
        });
    };
    ageLength();
    
    $("#form").submit(function(event){
        var validation = $('.validation').html('');
        var day = $("#day").val();
        var month = $("#month").val();
        var year = $("#year").val();
        var age = 18;
        var mydate = new Date();
        mydate.setFullYear(year, month-1, day);

        var currdate = new Date();
        currdate.setFullYear(currdate.getFullYear() - age);
        
        if ($.isNumeric(day)==true && $.isNumeric(month)==true && $.isNumeric(year)==true) {
            if(day > 31 || month > 12 || year < 1900 || year.length < 4){
                validation.html("*Fecha inválida");
            } else if ((currdate - mydate) < 0){
                validation.html("*Debes ser mayor de " + age + " años para ingresar");
            }else {
                window.location.href = "/index";
            };   
        }else {
            validation.html("*Todos los campos deben ser numéricos");
        }
        event.preventDefault();
    });
});