$(document).ready(function(){
    $(this).bind("contextmenu", function(e) {
          e.preventDefault();
      });
    $("#Login").on('submit',function(e){
      e.preventDefault();
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
          if($.trim(data)=="Logged_In")
          {
            $(location).attr('href',"home.php");
          }
          else {
            alert("Invalid Credentials! please try again");
            $(location).attr('href',"index.php");
          }
        }
      });
    });
});
