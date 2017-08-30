$(document).ready(function(){

$("#button").click(function() {
    registerUser();
    console.log("aint nobody fucking with my click")
});

$(".password").keyup(function(event) {
  checkPasswordInput();
});

function registerUser(){
  var form_data = $("form").serialize();

  console.log(form_data);

  $.post('/phpscripts/newUser.php',
        form_data,
        function(data) {

        $("#main").hide();
        $("body").html("<h1> registration successfull </h1>")
  });
}

function checkPasswordInput(){
  var firstPassword = $('#password').val();
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
