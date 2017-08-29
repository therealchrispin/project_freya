$(document).ready(function(){

/*$("#button").click(function() {
  if(formDataisChecked){
    registerUser();
    }
});*/

$(".password").keyup(function(event) {
  checkPasswordInput();
});


function fromDataisChecked() {
  return true;
}

function registerUser(){
  var form_data = $("form").serialize();
  $.post('/phpscripts/newUser.php',
        form_data,
        function(data) {
        $("#main").hide();
        $("body").html("<h1> registration succesfull </h1>")
  });
}

function checkPasswordInput(){
  var firstPassword = $("#password").val();
  var secondPassword = $("#second_password").val();

  if(secondPassword == firstPassword){
    $("#password").css('border', '2px solid green');
    $("#second_password").css('border', '2px solid green');
  } else {
    $("#password").css('border', '2px solid red');
    $("#second_password").css('border', '2px solid red');
  }
}


});
