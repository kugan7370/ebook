

$(document).ready(function () {

    
    //email validation
    let emailError = true;
    $('.checking_mail').keyup(function (e) {
        validEmail();
        
    });
    
    function validEmail() {
        var checkEmail = $('.checking_mail').val();
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,6})?$/;
        var valid = emailReg.test(checkEmail);
        if (checkEmail.length == '') {
            $('.message_email').html("required!").css("color", "red");
            $('.checking_mail').css("border", "1px solid red");
            
            emailError = false;
            return false;
        }
        else {
            
            if (!(valid)) {
                $('.message_email').html(" ").css("color", "red");
                $('.checking_mail').css("border", "1px solid red");
                $('.message_email').html("Invalid email!").css("color", "red");
                emailError = false;
                return false;
            }
        
            else {
               
                $('.checking_mail').css("border", "1px solid green");
                $.ajax({
                    type: "POST",
                    url: "validation.php",
                    data: {
                
                        "email_id": checkEmail,
                    },
            
                    success: function (response) {
               
                        $('.message_email').html(response);
                        
                    }
                });
                emailError = true;
                        return true;
           
            }
        }
    }
    
    
    
    // username validation
    let usernameError = true;
    $('.checking_username').keyup(function () {
            
        validUsername();
            
    });
        
    
    
    function validUsername() {
        var checkusername = $('.checking_username').val();
        var userReg = /^[a-zA-Z]*$/;
        var isValid = userReg.test(checkusername);
        if (checkusername.length == '') {
            $('.message_User_name').html("required!").css("color", "red");
            $('.checking_username').css("border", "1px solid red");
            usernameError = false;
            return false;
        }
        else {
            $('.message_User_name').html(" ").css("color", "red");
            if (!(isValid)) {
                $('.checking_username').css("border", "1px solid red");
                $('.message_User_name').html("Only letters!").css("color", "red");
               
                usernameError = false;
                return false;
            }
            else if ((checkusername.length < 3) || (checkusername.length > 10)) {
                $('.checking_username').css("border", "1px solid red");
                $('.message_User_name').html("Username length between 3 and 10").css("color", "red");
                usernameError = false;
                return false;
            }
                 
                
            else {
                $('.checking_username').css("border", "1px solid green");
                $.ajax({
                    type: "POST",
                    url: "validation.php",
                    data: {
                        
                        "user_name": checkusername,
                    },
                    
                    success: function (response) {
                       
                        $('.message_User_name').html(response);
                        
                    }
                });
                usernameError = true;
                return true;
               
            }
        }
    }
    //password validation
    let passwordError = true;
    $('.checking_password').keyup(function () {
        validpassword();
    });
    
    
    
    function validpassword() {
        var checkpassword = $('.checking_password').val();
        var checkconpassword = $('.checking_confirm_password').val();
           
        var userReg = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
        var isValid = userReg.test(checkpassword);
        if ((checkpassword.length == '') && (checkconpassword.length == '')) {
            $('.message_pass').html("required!").css("color", "red");
            $('.message_confirm_pass').html("required!").css("color", "red");
            $('.checking_password').css("border", "1px solid red");
            $('.checking_confirm_password').css("border", "1px solid red");
            passwordError = false;
            return false;
        }
            
        else {
            if (!(isValid)) {
                $('.checking_password').css("border", "1px solid red");
                $('.message_pass').html("Minimum eight characters, at least one letter and one number").css("color", "red");
                passwordError = false;
                return false;
            }
            else {
                $('.message_pass').html(" ").css("color", "red");
                $('.checking_password').css("border", "1px solid green");
                $('.checking_confirm_password').keyup(function () {
                    var checkconpassword = $('.checking_confirm_password').val();
                    var pass = $('.checking_password').val();
    
                    if (pass != checkconpassword) {
                        $('.message_confirm_pass').html("password not matched").css("color", "red");
                        $('.checking_confirm_password').css("border", "1px solid red");
                        passwordError = false;
                        return false;
                    }
                    else {
                        $('.message_confirm_pass').html(" ").css("color", "red");
                        $('.checking_confirm_password').css("border", "1px solid green");
                        $.ajax({
                            type: "POST",
                            url: "validation.php",
                            data: {
                        
                                "user_password": isValid,
                            },
                    
                            success: function (response) {
                       
                                // $('.message_User_name').html(response);
                            }
                        });
                        passwordError = true;
                        return true;
                    
                    }
                });
                
            }
        }
    }
    
    
    // gender validation
    let genderError = true;
    $('.check_gender').click(function (e) {
        validGender();
        
    });
    
    function validGender() {
        var checkgender = $('input[type=radio][name=usergender]:checked');
        var genders = $('.check_gender').val();
        if (checkgender.length == 0) {
            $('.message_gender').html("required!").css("color", "red");
            $('.check_gender').css("border", "1px solid red");
           
            genderError = false;
            return false;
        }
        else {
            $('.check_gender').css("border", "1px solid #adacaa");
            
            $('.message_gender').html(" ").css("color", "red");
            // $('.message_gender').text(genders).css("color", "red");
                
            $.ajax({
                    
                    type: "POST",
                    url: "validation.php",
                    data: {
                
                        "gender": genders,
                    },
            
                    success: function (response) {
               
                       
                    }
                });
                genderError = true;
                return true;
            }
        
        }
    
    // agree validation
    let agreeError = true;
    $('.check_agree').click(function (e) { 
        validAgree();
        
    });
    
    function validAgree() {
        
        if($('input[type=checkbox]:checked').length == 0)
         {
            $('.message_agree').html("required!").css("color", "red");
            $('.check_agree').css("border", "1px solid red");
            agreeError = false;
            return false;
        }
        else {
            $('.check_agree').css("border", "1px solid #adacaa");
            
            $('.message_agree').html(" ").css("color", "red");
            agreeError = true;
            return true;  
                
            }
        
    }
    
    
    // main
    // submit();
   
        $('#submit').click(function () {
            validUsername();
            validEmail();
            validpassword();
            validGender();
            validAgree();
            
            if ((usernameError == true)&&(emailError == true)&&( passwordError == true)&&( genderError == true)&&(agreeError == true)) {
                
               
            return true;
            } else {
                // $('.register').removeClass('bg-banner');
                // $('.register').addClass('bg-red');
                // $('input').prev().css("color","red");
                return false;
            }
        });
    
       
    });
    
    