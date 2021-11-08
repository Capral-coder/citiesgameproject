function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();
    var i = $("#bs").val();
    
    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Паролі не співпадають!");

        if(i.value=="Паролі не співпадають!")
            document.getElementById("ds").disabled=true;
        else
            document.getElementById("ds").disabled=false;

    else
        $("#divCheckPasswordMatch").html("Все гаразд!");
}	


$(document).ready(function () {
   $("#txtNewPassword, #txtConfirmPassword").keyup(checkPasswordMatch);
});
	
