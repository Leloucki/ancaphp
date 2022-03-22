// 1. Acquire a reference to our <form>.
//    This can also be done by setting <form name="blub">:
//       var form = document.forms.blub;

var form = document.getElementById("formlogin");


// 2. Get a reference to our preferred element (link/button, see below) and
//    add an event listener for the "click" event.
document.getElementById("btnlogin").addEventListener("click", function () {
  login();
});

document.getElementById("btnregister").addEventListener("click", function () {
  register();
});

document.getElementById('logout').addEventListener('click', function(){
  
} )

$(document).ready(function() {
  $("#formlogin").validate();
  });

$(document).ready(function() {
  $("#formregister").validate({
    rules:{
      passwordR:{
        minlength:5
      },
      cpasswordR:{
        minlength:5,
        equalTo:'#passwordR'
      }
    }
  });
});

function login(){
  var email = $('#email').val();
  var password = $('#password').val();
  $.post('php/db/loginDB.php', {email:email, password:password}, (data) => {
          if(data == 'sucesso'){window.location.href = '/ancap';}else{
          $('#returnlogin').html(data);
          }
      });
}

function register(){
  var userR = $('#userR').val();
  var emailR = $('#emailR').val();
  var passwordR = $('#passwordR').val();
  $.post('php/db/register.php', {userR:userR, emailR:emailR, passwordR:passwordR}, (data) => {
        $('#returnregister').html(data);
      });
}

function showUser(){
    var usuario = $('#usuario').val();
    $.post('php/db/sessao.php', {usuario: usuario}, (data) => {
            $('#retorno').html(data);
        });
}

function logOut(){
  $.post('php/db')
}

function onChange() {
    const password = document.querySelector('input[name=passwordR]');
    const confirm = document.querySelector('input[name=cpasswordR]');
    if (confirm.value === password.value) {
      confirm.setCustomValidity('');
    } else {
      confirm.setCustomValidity('Passwords do not match');
    }
  }
