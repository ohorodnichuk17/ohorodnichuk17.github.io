<html>
<head>
    <meta charset="UTF-8">
    <title>Сайт web-студії "Web-DECO"</title>
    <script src="js/clock.js"></script>
    <script type="text/javascript">
        function send()
        {
            var valid = true;
            var elems = document.forms[0].elements;
            for(var i=0; i<document.forms[0].length; i++) {
                if( elems[i].getAttribute('type') == 'text' || 
                    elems[i].getAttribute('type') == 'password' ||
                    elems[i].getAttribute('type') == 'email' ) {
                        if(elems[i].value == '') {
                            elems[i].style.border = '2px solid red';
                            valid = false;
                        }
                    }
            }
            if(!valid) {
                alert('Заповніть всі поля!!!');
                return false;
            }
        }
    </script>

    <style>
    .shadowtext {
        text-shadow: 1px 3px 2px white, 0 0 1em red;
        color: #210042;
        font-size: 2em;
       }
       .big{transform scale(3);}
    </style>
    <script>
        window.onload = function(){
        setInterval(clockPainting, 1000);}
        </script>
</head>
<body background="images/bg.jpg">
<table border="1" align="center" cellpadding="10">
    <tr> 
        <td background="images/bg-3.jpg" colspan="2" height="150" align="right" hspace="5">
            <font size="5" color="Maroon"><h1 class="shadowtext">Сайт web-студії "Web-DECO"</h1></font></td>
    </tr>
    <tr>
        <td colspan="2">
        <font size="5"><b><a href="index.php">Головна</a>&nbsp;&nbsp; <a href="input.php">Зареєстровані</a>&nbsp;&nbsp; <a href="log.php">Інформація</a>&nbsp; &nbsp;<a href="foto.php">Фотогалерея</a>&nbsp; &nbsp;<a href="tel.php">Телефони</a></b></font>
        
        <!-- <font size="4"><b>
                        <a href="#">Головна</a>&nbsp;&nbsp;
                        <a href="#">Фотогалерея</a>&nbsp;&nbsp;
                        <a href="#">Телефони</a>&nbsp;&nbsp;
                        <a href="#">Статистика</a>&nbsp;&nbsp;
                        <a href="#">Зареєстровані</a>&nbsp;&nbsp;
                        </b></font></td> -->
    </tr>
    <tr>
        <td width="30%" valign="top">
            <center><canvas id="canvas" height="120" width="120"></canvas></center>
            <hr>


            <font size="5" color="navy"><h2>Новини</h2></font>
                <font size="5">
            <ul>
                <li><a href="#">Сайт будівельної компанії </a></li>
                <li><a href="#">Сайт ТМ "Новашкола" </a></li>
                <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
                <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li><br>
                <p align="right"><a href="#">інші...</a></p>
            </ul>
            </font>
            <hr>
                 <h1 align="center"><font color="green">Реєстрація</font></h1>  
                 <form action="forma.php" method="post" onsubmit="return send();">
                    <table align="center" bgcolor="#ccc">
                     <tr>
                         <td><font color="green">Прізвище</font>: </td>
                        <td><input type="text" size="10" maxlength="20" name="name2"></td>
                    </tr>
                    <tr>
                        <td><font color="green">Ім'я</font> : </td>
                        <td><input type="text" size="10" maxlength="20" name="name1"></td>
                    <tr>
                        <td><font color="green">E-mail</font>: </td>
                        <td><input type="email" size="10" maxlength="20" name="email"></td>
                    </tr>
                    <tr>
                        <td><font color="green">Пароль</font>: </td>
                        <td><input type="password" size="10" maxlength="20" name="password"></td>
                    </tr>
                    </table>
   
                        <p align="center">
                             <input type="submit" value="Зареєструватись">
                            <input type="reset" value="Очистити">     
                        </p>
                </form>
            </hr>
        </td>
        <td width="70%">
            <H1 align="center">Фотогалерея</H1>
            <?php
                $dir = "pic";
                $files = scandir($dir);
                for($i=2; $i<count($files); $i++)
                {
                    $r=$files[$i];
                
            ?>
            <img src="<?php echo $dir; ?>/<?php echo $files[$i];?>" width="350" height="250" hspace="5" vspace="7" border="5" onclick="this.classList.toggle('big')">
             <?php   } ?>
        </td>
    </tr>
    <tr>
        <td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">
            <font size="4">Сайт розробила "Огороднічук Юлія"</font>
        </td>
    </tr>
</table>
</body>
</html>