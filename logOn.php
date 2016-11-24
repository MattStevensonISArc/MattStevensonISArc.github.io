<?php


if($_SERVER["REQUEST_METHOD"]=="POST")

{
    $host="192.168.0.25";
    $port="3306";
    $dbname="bannvalley";
    $username="isarc";
    $password="1s4rcLimited";

    try {

        $db=new PDO("mysql:host=$host;port=$port;dbname=$dbname",$username,$password);

        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }

    catch(PDOException $err) {

        echo "Connection Failed.".$err->getMessage();

    }

    if($db) {

        $email="$_POST[email]";
        $password="$_POST[password]";

        $sql="INSERT INTO users(email,password)VALUES('$email','$password')";
        $db->exec($sql);
        $lastId=$db->lastInsertId();
        $sql="SELECT * FROM users WHERE id=$lastId";

        $result=$db->query($sql);
        $row=$result->fetch(PDO::FETCH_ASSOC);
        echo json_encode($row);
    }

}


else{

?>

<!-- Html -->

<!DOCTYPE html>

<html lang="en">

<!-- Head -->

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <link href="https://fonts.googleapis.com/css?family=Cabin:700" rel="stylesheet">

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Google API : Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Custom CSS Stylesheet -->
    <link href="custom.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Log In CSS</title>

</head>

<!-- Body -->

<body>

<!-- Form Divider -->

    <div id="floatform">

        <!-- Alert message about cookies and direction to 'i' for more info-->

        <div class="alert">
            <span class="closealert" onclick="this.parentElement.style.display='none';">&times;</span>
            This site uses cookies to provide statistics that help us give you the best experience with our site, by entering you are agreeing to our use of cookies.<br><br>
            If you are in need of more information regarding logging in to the site, hover over the <img src="infoicon.png" id="inline-info-icon" width="20px" height="20px" class="wow fadeInUp"> symbol.
        </div>

        <!-- Info Hover Element -->

        <div class="help">

            <div class="info">

                <div class="info-icon-right">

                    <!-- Info "i" Image -->

                    <a href="#"><img src="infoicon.png" id="infoicon" width="110px" height="118px" class="wow fadeInUp">

                    </a>

                </div>

                <!-- Info Slider -->

                <div class="slider">

                    <h3>Need some help?</h3>

                    <!-- More Help HyperLink Text -->

                    <div class="morehelp">

                        <a href="#"><p>Forgotten your <strong>password</strong>?</p></a>
                        <a href="#"><p>Apply for an account</p></a>

                    </div>

                </div>

            </div>

        </div>

        <!-- 'Float' Form -->

        <form class="form" id="f-form" method="post">

            <div class="input-elements">

                <!-- Email and Password entry elements -->

                    <input name="email" type="text" class="text-input" id="email" placeholder="Type your email address here..." />

                    <input name="password" type="text" class="text-input" id="password" placeholder="Type your password here..." />

                    <!-- Log In Button -->

                        <input type="button" value="Log in" onclick="sendForm()" id="loginbutton"/>

                        <!-- Button Hover Slider -->

                            <div class="buttonslider"></div>

            </div>

        </form>

</div>

</body>

</html>

    <script>
        function sendForm()
        {
            event.preventDefault();

            var email=document.getElementById("email").value;
            var password=document.getElementById("password").value;

            var xhttp=new XMLHttpRequest();

            xhttp.onreadystatechange=function()
            {
                if(this.readyState==4&&this.status==200)
                {
                    var log = JSON.parse(this.responseText);
                    console.log(log);
                    console.log(log.email);
                    console.log(log.password);

                    document.getElementById("result").innerHTML=log.title;

                }
            };

            xhttp.open("POST",window.location.pathname.split("/").pop(),true);

            xhttp.setRequestHeader("Content-type","Application/x-www-form-urlencoded");

            xhttp.send("email="+email+"&password="+password);

        }

    </script>


    <?php

}

?>
