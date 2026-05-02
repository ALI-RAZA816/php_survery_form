$(document).ready(function(){

    // load compliments
    function loadRecords(){
        $.ajax({
            url:"load-data.php",
            success:function(data){
                $("#output").html(data);
            }
        });
    }
    loadRecords();

    // load user account
    function loadusers(){
        $.ajax({
            url:"load-user-data.php",
            success:function(data){
                $("#userOutput").html(data);
            }
        });
    }
    loadusers();

    // add compliment
    var name = $("#yourname");
    var fellowname = $("#classfellowname");
    var message = $("#textarea");

    name.on('focus',function(){
        $("#yourname").removeClass("fieldactive");
        $(".nameError").removeClass("nameActive");
    });
    fellowname.on('focus',function(){
        $("#yourname").removeClass("fieldactive");
        $(".nameError").removeClass("nameActive");
    });
    message.on('focus',function(){
        $("#yourname").removeClass("fieldactive");
        $(".nameError").removeClass("nameActive");
    });

    $("#submit").on("click",function(){

        var yourname = $("#yourname").val();
        var classfellowname = $("#classfellowname").val();
        var textarea = $("#textarea").val();

        if(!yourname){
            $("#yourname").addClass("fieldactive");
            $(".nameError").addClass("nameActive");
            return;
        }

        if(!classfellowname){
            $("#classfellowname").addClass("fieldactive");
            $(".classError").addClass("nameActive");
            return;
        }
        
        if(!textarea){
            $("#textarea").addClass("fieldactive");
            $(".msgError").addClass("nameActive");
            return;
        }

        $("#submit").html("Your response successfully uploaded");
        $("#submit").addClass("bgactive");
        $.ajax({
            url:"insert-data.php",
            type:"POST",
            data:{
                yourname:yourname,
                classfellowname:classfellowname,
                textarea: textarea
            },
            success:function(data){
                if(data == "Successfully Uploaded"){
                    loadusers();
                    $("#yourname").val('');
                    $("#classfellowname").val('');
                    $("#textarea").val('');
                    $("#yourname").removeClass("fieldactive");
                    $(".nameError").removeClass("nameActive");
                    $("#classfellowname").removeClass("fieldactive");
                    $(".classError").removeClass("nameActive");
                    $("#textarea").removeClass("fieldactive");
                    $(".msgError").removeClass("nameActive");
                    setTimeout(()=>{
                        $("#submit").html("Submit");
                        $("#submit").removeClass("bgactive");
                    },5000);
                }
            },
            error:function(){
                $("#submit").html("Response can't be uploaded");
                $("#submit").removeClass("bgactive");
                $("#submit").addClass("bgErr");
                setTimeout(()=>{
                    $("#submit").html("Submit");
                    $("#submit").removeClass("bgErr");
                },5000);
            }
        });

    });

    // create account
    var signFirstName = $("#first_name");
    var signlastName = $("#last_name");
    var signEmail = $("#email");
    var signPassword = $("#password");

    signFirstName.on("focus", function(){
          $(".nameErr").css({
                "display":"none"
            });
            $(".nameErr").html("");
             $("#first_name").removeClass("firstNamefieldErr");
    });

    signlastName.on("focus", function(){
        $(".lastErr").css({
                "display":"none"
        });
        $(".lastErr").html(" ");
        $("#last_name").removeClass("firstNamefieldErr");
    });

    signEmail.on("focus", function(){
        $(".emailErr").css({
            "display":"none"
        });
        $(".emailErr").html(" ");
        $("#email").removeClass("firstNamefieldErr");
    });
    signPassword.on("focus", function(){
          $(".passwordErr").css({
                "display":"none"
            });
            $(".passwordErr").html(" ");
             $("#password").removeClass("firstNamefieldErr")
    });

    $("#signupButton").on('click', function(event){
        event.preventDefault();
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var email = $("#email").val();
        var password = $("#password").val();

        if(!first_name){
            $(".nameErr").css({
                "display":"block"
            });
            $(".nameErr").html("First_name is required");
             $("#first_name").addClass("firstNamefieldErr");
             return;
            }
            if(!last_name){
                $(".lastErr").css({
                    "display":"block"
                });
                $(".lastErr").html("Last_name is required");
                $("#last_name").addClass("firstNamefieldErr");
            return;
        }
        if(!email){
            $(".emailErr").css({
                "display":"block"
            });
            $(".emailErr").html("Email is required");
            $("#email").addClass("firstNamefieldErr");
            return;
        }
        if(!password){
            $(".passwordErr").css({
                "display":"block"
            });
            $(".passwordErr").html("Email is required");
             $("#password").addClass("firstNamefieldErr")
            return;
        }

        $.ajax({
            url:"create-account.php",
            type:"POST",
            data:{
                first_name: first_name,
                last_name: last_name,
                email : email,
                password : password
            },
            success:function(data){
                if(data == "Name already exists"){
                    $("#first_name").addClass("firstNamefieldErr");
                    $(".nameErr").css({
                        "display":"block"
                    });
                    $(".nameErr").html("Name already exists");
                }else if(data == "Last_name already exists"){
                    $(".lastErr").css({
                        "display":"block"
                    });
                    $(".lastErr").html("Last_name already exists");
                }else if(data == "Email already exists"){
                    $(".emailErr").css({
                        "display":"block"
                    });
                    $(".emailErr").html("Email already exists");
                }else if(data == "Your action can't recorded"){
                    $(".actionErr").css({
                        "display":"block"
                    });
                    $(".actionErr").html("Your action can't recorded");
                }else if(data == "Successfully uploaded"){
                    loadusers();
                    window.location.href = "http://localhost/firstexperience/admin/login.php";
                    $("#first_name").val("");
                    $("#last_name").val("");
                    $("#email").val("");
                    $("#password").val("");
                }
            }
        });
    });

    // handle login
    var logemailInput = $("#loginemail");
    var logpasswordInput = $("#loginpassword");
    $(logemailInput).on("focus",function(){
        $("#loginEmailErr").html("");
        $("#loginemail").removeClass("firstNamefieldErr");
    });
    $(logpasswordInput).on("focus",function(){
        $("#loginPssErr").html("");
        $("#loginpassword").removeClass("firstNamefieldErr");
    });

    $("#loginButton").on('click',function(event){
        event.preventDefault();
        var loginemail = $("#loginemail").val();
        var loginpss = $("#loginpassword").val();

        if(!loginemail){
            $("#loginEmailErr").html("Email is required");
            $("#loginEmailErr").css({
                "color":"red",
                "fontSize":"15px"
            });
            $("#loginemail").addClass("firstNamefieldErr");
            return;
        }
        if(!loginpss){
            $("#loginPssErr").html("Password is required");
            $("#loginPssErr").css({
                "color":"red",
                "fontSize":"15px"
            });
            $("#loginpassword").addClass("firstNamefieldErr");
            return;
        }

        $.ajax({
            url:"save-login.php",
            type:"POST",
            data:{
                loginemail : loginemail,
                loginpss : loginpss
            },
            success:function(data){
                if(data == "success"){
                    window.location.href = "http://localhost/firstexperience/show-record.php";
                }else if(data == "Invalid Email"){
                    $("#loginEmailErr").html("Invalid Email");
                    $("#loginEmailErr").css({
                        "color":"red",
                        "fontSize":"15px"
                    });
                    $("#loginemail").addClass("firstNamefieldErr");
                }else if(data == "Invalid Password"){
                    $("#loginPssErr").html("Password is incorrect");
                    $("#loginPssErr").css({
                        "color":"red",
                        "fontSize":"15px"
                    });
                    $("#loginpassword").addClass("firstNamefieldErr");
                }else if(data == "Invalid Email"){
                    $("#loginEmailErr").html("Invalid Email");
                    $("#loginEmailErr").css({
                        "color":"red",
                        "fontSize":"15px"
                    });
                    $("#loginemail").addClass("firstNamefieldErr");
                }
                // alert(data);
            }
        })
    });

    // handle logout
    $(document).on('click',"#logoutBtn",function(){
        $.ajax({
            url:"logout.php",
            success:function(data){
                if(data == "Logout Successfully"){
                    window.location.href="http://localhost/firstexperience/admin/index.php";
                }
            }
        });
    });

    // fetch data to edit form
    $(document).on('click',".fa-edit", function(){
        var userid = $(this).data('id');
        $("#formContainer").css({
            "transform":"scale(1)",
            "opacity":1,
            "visibility":"visible"
        });
        $.ajax({
            url:"edit-user.php",
            type:"POST",
            data:{userID : userid},
            success:function(data){
                $("#showoutput").html(data);
            }
        });
    });
    
    // hide edit form
    $("#cross").on("click",function(){
        $("#formContainer").css({
            "transform":"scale(.2)",
            "opacity":0,
            "visibility":"hidden"
        });
    });

    // edit user
    $(document).on('click',"#editbutton", function(event){
        event.preventDefault();

        var editID = $("#eid").val();
        var efirstname = $("#efirst_name").val();
        var elastname = $("#elast_name").val();
        var eemail = $("#eemail").val();
        var userrole = $("#user_role").val();
        $.ajax({
            url:"save-edit-user.php",
            type:"POST",
            data:{
                editID: editID,
                efirstname: efirstname,
                elastname: elastname,
                eemail: eemail,
                userrole: userrole
            },
            success: function(data){
                if(data == "Successfully updated"){
                    loadusers();
                    $("#formContainer").css({
                        "transform":"scale(.2)",
                        "opacity":0,
                        "visibility":"hidden"
                    });
                }
            }
        })
    });

    // delete user
    $(document).on('click','.fa-trash',function(){
        var id = $(this).data('id');
        $.ajax({
            url:"delete-user.php",
            type:"POST",
            data:{id:id},
            success:function(data){
                if(data == "Record deleted successfully"){
                    loadusers();
                    alert("Record deleted successfully");
                }
            }
        })
    });

    // hide || show password
    $(".fa-eye").on('click',function(){
      var type = $(".password").attr('type');
      if(type == 'password'){
        $(".password").attr('type','text');
        $(".fa-eye").css("display","none");
        $(".fa-eye-slash").css("display","block");
    }
    });
    $(".fa-eye-slash").on('click',function(){
      var type = $(".password").attr('type');
      if(type == 'text'){
        $(".password").attr('type','password');
        $(".fa-eye").css("display","block");
        $(".fa-eye-slash").css("display","none");
    }
    });

});
