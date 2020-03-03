<?php
    session_start();

    if (array_key_exists("username", $_SESSION)) {
        header("location: ./index.php");
        exit;
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trivia - Login with Poorbook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="icon" href="assets/img/trivia-ico_2.png">
    <script>
        function testLogin()
        {
            var http = new XMLHttpRequest();
            http.onreadystatechange = function()
            {
                //alert(this.readyState + " - " + this.status );
                if(this.readyState == 4 && this.status == 200){
                    //alert(this.responseText);
                    response = JSON.parse(this.responseText);
                    //alert(response.code);
                    if(response.code==1){
                        document.location.href="./index.html";
                    }else{
                        alert(response.description);
                    }
                }
            };

            
            var un = document.getElementById("username").value;
            var pw = document.getElementById("password").value;
            var param = "email=" + un + "&password=" + pw;

            http.open('POST','../poorbook/api/login.php',false);
            http.setRequestHeader('Content-type','application/x-www-form-urlencoded');
            http.send(param);
        }

    </script>
</head>
<body>
    <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="logo">
                            <h1><a href="index.html" title="Torna alla home di Trivia">Trivia</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            <!--form-->
                <p class="h3">Effettua il login con poorbook</p>
                <p>
                <input type="email" id="username" placeholder="Username">
                </p><p>
                <input type="password" id="password" placeholder="Password">
                </p><p>
                <button onclick="testLogin()" type="submit">Login</button>
                </p>
            <!--/form-->
        </div>
</body>
</html>