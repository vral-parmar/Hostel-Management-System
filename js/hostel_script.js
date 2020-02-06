$(document).ready(function(){
    $(this).bind("contextmenu", function(e) {
          e.preventDefault();
      });
    $("#faculty_login").on('submit',function(e){
      e.preventDefault();
      $("#Hide").attr("disabled",true);
      var formdata=new FormData(this);
      formdata.append("submit-login","submit-login");
      $.ajax({
        url:"server_.php",
        method:"post",
        cache:false,
        processData:false,
        contentType:false,
        data: formdata,
        success:function(data){
          if($.trim(data)=="Logged In")
          {
            $(location).attr('href',"home");
          }
          else {
            alert("Invalid Credentials! please try again");
            $(location).attr('href',"index.php");
          }
        }
      });
    });
});