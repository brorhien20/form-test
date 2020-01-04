
/** function for user to register on platform **/
$("#register-form").on('submit',(function(e) {
    e.preventDefault();
    $("#register-btn").attr('disabled', true).html("Processing registration");
    var datas = new FormData(this);
    $.ajax({
        url: "config/user-registration.php",
        type: "POST",
        data: datas, 
        contentType: false,
        cache: false,
        processData:false,        
        success: function(data){
            if(data.trim() == "done"){
                $(".err").html('<p class="alert alert-success">Registration successfull! redirecting in 3secs</p>');
                  setTimeout(
                    function () {
                      location.href='login.php';
                    }, 3000);
            }else{
                $("#register-btn").attr('disabled',false);
                $(".err").html('<p class="alert alert-danger">'+data+'</p>');
            }
        },
        error : function(e){
            console.log(e);
        }
    });
}));

$("#login-form").on('submit',(function(e) {
    e.preventDefault();
    $("#login-btn").attr('disabled', true).html("Processing");
    var datas = new FormData(this);
    $.ajax({
        url: "config/logAction.php",
        type: "POST",
        data: datas, 
        contentType: false,
        cache: false,
        processData:false,        
        success: function(data){
            if(data.trim() == "done"){
                $(".err").html('<p class="alert alert-success">Login successfull!! redirecting in 3 secs</p>');
              setTimeout(
                function () {
                  location.href='user.php';
                }, 3000);
            }else{
                $("#login-btn").attr('disabled',false).html('Login now');
                $(".err").html('<p class="alert alert-danger">'+data+'</p>');
                setTimeout(
                function () {
                  $(".err").html('');
                }, 3000);
            }
        },
        error : function(e){
            console.log(e);
        }
    });
}));