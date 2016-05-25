<?php
header ("Content-Type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration
        </title>
        <link rel="stylesheet" href="style.css"/>
        <script src="jquery-2.2.2.min.js"></script>
        <script>
             function AjaxFormRequest(result_id,form_id,url) {
                jQuery.ajax({
                    url:     url, //Адрес подгружаемой страницы
                    type:     "POST", //Тип запроса
                    dataType: "html", //Тип данных
                    data: jQuery("#"+form_id).serialize(), 
                    success: function(response) { 
                    document.getElementById(result_id).innerHTML = response;
                },
                error: function(response) { //Если ошибка
                document.getElementById(result_id).innerHTML = "Ошибка при отправке формы";
                }
             });
        }
         </script>
      
    </head>
    <body>
        
        <h1>Registration</h1>
        <div align = "center">
            <div class = "form" >
                <form action="" method="post" id="regForm">
                    <input type="text" name="name" class="data" autofocus placeholder="Your name" /><br><br>
                    &nbsp;&nbsp;<input type ="tel" name="email" class="data"  placeholder="Enter your e-mail" /><br><br>
                    &nbsp;&nbsp;<input type ="text" name="login" class="data"  autocomplete="off" placeholder="Create login"/><br><br>
                    &nbsp;&nbsp;<input type="password" name="password" class="data" placeholder=" Create password" /><br><br>
                    &nbsp;<input type="password" name="password2" class="data" placeholder="Repeat password" /><br><br>
                    <input type="button" value="Save" class = "btn3" onclick="AjaxFormRequest('result','regForm','check2.php')"/>
                    <div id="result"></div>
                </form>
            </div>
        </div>
        <div align='center'><a href="index.php" ><h3>You have an account- Log in, please</h3></a></div>
    </body>
</html>