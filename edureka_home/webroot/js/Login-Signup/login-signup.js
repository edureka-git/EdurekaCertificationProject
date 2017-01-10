<!-- function to show/hide password onclick of "show" button -->

document.getElementById("passshow1").addEventListener("click", function(e){
        var pwd = document.getElementById("pwd1");
        if(pwd.getAttribute("type")=="password"){
            pwd.setAttribute("type","text");
        } else {
            pwd.setAttribute("type","password");
        }
    });

document.getElementById("passshow2").addEventListener("click", function(e){
        var pwd = document.getElementById("pwd2");
        if(pwd.getAttribute("type")=="password"){
            pwd.setAttribute("type","text");
        } else {
            pwd.setAttribute("type","password");
        }
    });

document.getElementById("passshow3").addEventListener("click", function(e){
        var pwd = document.getElementById("pwd3");
        if(pwd.getAttribute("type")=="password"){
            pwd.setAttribute("type","text");
        } else {
            pwd.setAttribute("type","password");
        }
    });
<!-- function to show/hide password onclick of "show" button -->


<!-- script to go to the forgot password section --> 

jQuery(document).ready(function($) {
$(".forgotpass").click(function() {
    $(".loginsec").hide();
	$(".forgotpasssection").show();
	$(".loginemailsuccess").hide();
});

<!-- script to go to the forgot password section -->

<!-- script to remove * on click in signup tab -->

$(".inputsignup1").focusin(function() {
    $(".aster1").hide();
});
$(".inputsignup1").focusout(function() {
	$(".aster1").show();
});
$(".inputsignup2").focusin(function() {
    $(".aster2").hide();
});
$(".inputsignup2").focusout(function() {
	$(".aster2").show();
});
$(".inputsignup3").focusin(function() {
    $(".aster3").hide();
});
$(".inputsignup3").focusout(function() {
	$(".aster3").show();
});
$(".inputsignup4").focusin(function() {
    $(".aster4").hide();
});
$(".inputsignup4").focusout(function() {
	$(".aster4").show();
});

<!-- script to remove * on click in signup tab -->


<!-- script to display the login page after the user clicks on the login tab -->
$(".logintab").click(function() {
	$(".forgotpasssection").hide();
	$(".successfooter").hide();
    $(".loginsec").show();
<!-- script to display the login page after the user clicks on the login tab -->
});



<!-- script to display success message after sending verification code -->

$(".forgotpass").click(function() {
	$(".successmsg").html("Verification Code sent to abhijeet.srivastava@gmail.com");
	$(".successfooter").show();
});

$(".forgotpass").click(function() {
  	$(".loginemailsuccess").show();  
});

<!-- script to display success message after sending verification code -->

<!-- script to display signin success message after login is successful -->

$(".startlearningbtn").click(function() {
	$(".successmsg").html("Login Successful");
	$(".successfooter").show();
});

<!-- script to display signin success message after login is successful -->

});


<!-- script to show and hide placeholder text on focusin and focusout -->

	$('input').focusin(function() {
		input = $(this);
		input.data('place-holder-text', input.attr('placeholder'))
		input.attr('placeholder', '');
	});

	$('input').focusout(function() {
		input = $(this);
		input.attr('placeholder', input.data('place-holder-text'));
	});
	
<!-- script to show and hide placeholder text on focusin and focusout -->


