//color: #a7b3cb;
//color: rgb(73, 171, 254);
//color: #48abfe;

if ($(window).width() > 1061) {
$('.user_name').on('input', function(){
    if($.trim((this).value) != "") {
    $('.sign_up_submit').disabled = false;
    $('.user_name_notification').hide();
    }
    else {
    $('.sign_up_submit').disabled = true;
    $('.user_name_notification').show();
    }
});
$('.user_email').on('input', function(){
    if($.trim((this).value) != "") {
    $('.email_notification').hide();
    $('.sign_up_submit').disabled = false;
    }
    else {
    $('.email_notification').show();
    $('.sign_up_submit').disabled = true;
    }
});
$('.user_password').on('input', function(){
    if($.trim((this).value) != "") {
    $('.password_notification').hide();
    $('.sign_up_submit').disabled = false;
    }
    else {
    $('.password_notification').show();
    $('.sign_up_submit').disabled = true;
    }
});
$('.login_email').on('input', function(){
    if($.trim((this).value) != "") {
    $('.login_email_notification').hide();
    $('.login_submit').disabled = false;
    }
    else {
    $('.login_email_notification').show();
    $('.login_submit').disabled = true;
    }
});
$('.login_password').on('input', function(){
    if($.trim((this).value) != "") {
    $('.login_submit').disabled = false;
    $('.login_password_notification').hide();
    }
    else {
        $('.login_submit').disabled = true;
    $('.login_password_notification').show();
    }
});

let showLogin = true;
$('.btn').click(() => {
    showLogin = !showLogin;
    if(!showLogin) {
        $('.inputs').animate({
                left: "17.5%",
        }, {duration: 200});
        
        setTimeout(() => {
            $('.login-form').fadeOut(200, function() {
                $('.signup-form').fadeIn(200);
            });
        }, 200); 
    }else {
        $('.inputs').animate({
            left: "49.5%",
        }, {duration: 200});

        setTimeout(() => {
            $('.signup-form').fadeOut(200, function() {
                $('.login-form').fadeIn(200);
            });
        }, 200); 
    }

});
}
else{
    $('.user_name').on('input', function(){
        if($.trim((this).value) != "") {
        $('.user_name_notification').hide();
        }
        else {
        $('.user_name_notification').show();
        }
    });
    $('.email').on('input', function(){
        if($.trim((this).value) != "") {
        $('.email_notification').hide();
        }
        else {
        $('.email_notification').show();
        }
    });
    $('.password').on('input', function(){
        if($.trim((this).value) != "") {
        $('.password_notification').hide();
        }
        else {
        $('.password_notification').show();
        }
    });
    
    let showLogin = true;
    $('.btn').click(() => {
        showLogin = !showLogin;
        if(!showLogin) {
            $('.inputs').animate({
            }, {duration: 200});
            setTimeout(() => {
                $('.login-form').fadeOut(200, function() {
                    $('.signup-form').fadeIn(200);
                });
            }, 200); 
        }else {
            $('.inputs').animate({
            }, {duration: 200});
    
            setTimeout(() => {
                $('.signup-form').fadeOut(200, function() {
                    $('.login-form').fadeIn(200);
                });
            }, 200); 
        }
    
    });
}