const sign_in_btn = document.querySelector('#sign-in-button');
const sign_up_btn = document.querySelector('#sign-up-button');
const container = document.querySelector('.container');

sign_up_btn.addEventListener('click', () =>{
    container.classList.add('sign-up-mode');
});

sign_in_btn.addEventListener('click', () =>{
    container.classList.remove('sign-up-mode');
});


// LOGIN VALIDATION
$(function() {

$("#name_error_message").hide();
$("#password_error_message").hide();

//var error_name = false;
//var error_password = false;

$("#form_name").focusout(function(){
check_name();
});

$("#form_password").focusout(function() {
check_password();
});

function check_name() {
var pattern = /^[a-zA-Z0-9]*$/;
var name = $("#form_name").val();
if (pattern.test(name) && name !== '') {
  $("#name_error_message").hide();
  $("#form_name").css("border-bottom","2px solid #34F458");
} else {
  $("#name_error_message").html("Enter valid username!");
  $("#name_error_message").show();
  $("#form_name").css("border-bottom","2px solid #F90A0A");
  //error_name = true;
}
}

function check_password() {
var password_length = $("#form_password").val().length;
if (password_length < 8) {
  $("#password_error_message").html("Enter valid password!");
  $("#password_error_message").show();
  $("#form_password").css("border-bottom","2px solid #F90A0A");
  //error_password = true;
} else {
  $("#password_error_message").hide();
  $("#form_password").css("border-bottom","2px solid #34F458");
}
}
});

//REGISTRATION VALIDATION

$(function() {

    $("#fname_error_message").hide();
    $("#sname_error_message").hide();
    $("#email_error_message").hide();
    $("#rpassword_error_message").hide();
    $("#retype_password_error_message").hide();

    var error_fname = false;
    var error_sname = false;
    var error_email = false;
    var error_rpassword = false;
    var error_retype_password = false;

    $("#form_fname").focusout(function(){
       check_fname();
    });
    $("#form_sname").focusout(function() {
       check_sname();
    });
    $("#form_email").focusout(function() {
       check_email();
    });
    $("#form_rpassword").focusout(function() {
       check_rpassword();
    });
    $("#form_retype_password").focusout(function() {
       check_retype_password();
    });

    function check_fname() {
       var pattern = /^[a-zA-Z0-9]*$/;
       var fname = $("#form_fname").val();
       if (pattern.test(fname) && fname !== '') {
          $("#fname_error_message").hide();
          $("#form_fname").css("border-bottom","2px solid #34F458");
       } else {
          $("#fname_error_message").html("Should contain only Characters");
          $("#fname_error_message").show();
          $("#form_fname").css("border-bottom","2px solid #F90A0A");
          error_fname = true;
       }
    }

    function check_sname() {
       var pattern = /^[a-zA-Z0-9]*$/;
       var sname = $("#form_sname").val()
       if (pattern.test(sname) && sname !== '') {
          $("#sname_error_message").hide();
          $("#form_sname").css("border-bottom","2px solid #34F458");
       } else {
          $("#sname_error_message").html("Should contain only Characters");
          $("#sname_error_message").show();
          $("#form_sname").css("border-bottom","2px solid #F90A0A");
          error_fname = true;
       }
    }

    function check_rpassword() {
       var password_length = $("#form_rpassword").val().length;
       if (password_length < 8) {
          $("#rpassword_error_message").html("Atleast 8 Characters");
          $("#rpassword_error_message").show();
          $("#form_rpassword").css("border-bottom","2px solid #F90A0A");
          error_rpassword = true;
       } else {
          $("#rpassword_error_message").hide();
          $("#form_rpassword").css("border-bottom","2px solid #34F458");
       }
    }

    function check_retype_password() {
       var rpassword = $("#form_rpassword").val();
       var retype_password = $("#form_retype_password").val();
       if (rpassword == retype_password) {
        $("#retype_password_error_message").hide();
        $("#form_retype_password").css("border-bottom","2px solid #34F458");

          error_retype_password = true;
       } else {
        $("#retype_password_error_message").html("Passwords Did not Matched");
        $("#retype_password_error_message").show();
        $("#form_retype_password").css("border-bottom","2px solid #F90A0A");
       }
    }

    function check_email() {
       var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       var email = $("#form_email").val();
       if (pattern.test(email) && email !== '') {
          $("#email_error_message").hide();
          $("#form_email").css("border-bottom","2px solid #34F458");
       } else {
          $("#email_error_message").html("Invalid Email");
          $("#email_error_message").show();
          $("#form_email").css("border-bottom","2px solid #F90A0A");
          error_email = true;
       }
    }


 });