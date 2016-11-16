<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $host="localhost";
    $port="8889";
    $dbname="projectdatabase";
    $username="root";
    $password="root";

    try
    {
        $db=new PDO("mysql:host=$host;port=$port;dbname=$dbname",$username,$password);

        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $err)
    {
        echo "Connection Failed.".$err->getMessage();
    }

    if($db){

        $title="$_POST[title]";
        $author="$_POST[author]";
        $content="$_POST[content]";
        $today=date("Y-m-d");
        $sql="INSERT INTO logentries(title,author,content,date_created)VALUES('$title','$author','$content','$today')";
        $db->exec($sql);
        $lastId=$db->lastInsertId();
        $sql="SELECT * FROM logentries WHERE id=$lastId";

        $result=$db->query($sql);
        $row=$result->fetch(PDO::FETCH_ASSOC);
        echo json_encode($row);
    }

}


else{

    ?>

    <!-- HTML -->

    <!DOCTYPE html>

    <html lang="en">

    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8">

        <link href="https://fonts.googleapis.com/css?family=Cabin:700" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bungee+Inline|Bungee+Shade|Baloo+Paaji|Wire+One|Cabin|Fjalla+One|Josefin+Slab|Lobster|Lobster+Two|Oleo+Script|Changa|Pacifico|Satisfy|Farsan" rel="stylesheet">

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <title>"New Around Here?"</title>

    </head>

    <body>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Animated Bootstrap Nav</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">About</a><span class="hover"></span></li>
                    <li><a href="#">Services</a><span class="hover"></span></li>
                    <li><a href="#">Portfolio</a><span class="hover"></span></li>
                    <li><a href="#">Blog</a><span class="hover"></span></li>
                    <li><a href="#">Contact</a><span class="hover"></span></li>
                </ul>
            </div>
        </div>
    </nav>



    <div id="form-main">
        <div id="form-div">
            <a href="http://www.isarc.co.uk"><img src="isarc.png" id="isarclogo" width="83" height="56" class="wow fadeInUp"></a>
            <form class="form" method="post" id="form1" action="index.html">

                <div class="input-group">
                    <h1 id="h1-div">"NEW AROUND HERE?"</h1>
                    <p class="username">
                        <input name="username" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="username" placeholder="Username" />
                    </p>

                    <p class="password">
                        <input name="password" type="text" class="validate[required,custom[email]] feedback-input" id="password" placeholder="Password" />
                    </p>

                    <div class="submit">
                        <input type="button" value="LOG IN." id="button-blue"/>
                        <div class="ease"></div>
                    </div>

                    <div class="submit">
                        <input type="button" value="SIGN UP." id="button-blue"/>
                        <div class="ease"></div>
                    </div>

            </form>

        </div>

        </div>
    </body>

    <style>
        @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

        body{
            background:#192226 !important;
        }

        .navbar-inverse{
            background:#222B31 !important;
            border-bottom:4px solid #EE445F !important;
        }

        .navbar-brand{
            font:12px Lato !important;
            text-transform:uppercase;
            color:#FFF !important;
            letter-spacing:2px;
            margin-top:2px;
        }

        .nav{
            margin-bottom:0px;
        a{
            font:500 11px Lato;
            letter-spacing:2px;
            padding:16px !important;
            color:#a3bfc6 !important;
            text-transform:uppercase;
            position:relative;
            z-index:1000;
        }
        a:hover{
            color:#FFF !important;
        }
        li{
            position:relative;
        }
        }

        .navbar-inverse .navbar-toggle{
            border:none;
        }

        .navbar-collapse{
            box-shadow:none !important;
            border:none !important;
        }

        .navbar-inverse .navbar-toggle:hover{
            background:transparent !important;
        }

        .navbar-inverse .navbar-toggle:focus{
            background:transparent !important;
        }

        .navbar-inverse .navbar-toggle:active{
            background:transparent !important;
        }

        .icon-bar{
            background:#a3bfc6 !important;
        }

        .hover{
            display:block;
            position:absolute;
            width:0%;
            height:100%;
            top:0px;
            left:0px;
            background:#EE445F !important;
            z-index:0;
            opacity:0;
        }

        @media (max-width: 767px) {
            .nav{
                padding-bottom:20px;
            a{
                padding:12px !important;
            }
        }
        }

        @media (max-width: 480px) {
            .nav{
                padding-bottom:20px;
            }
        }



        html
        {   background:url(http://www.prax.sk/wp-content/uploads/2014/11/background_blue_v0011.jpg) no-repeat center center fixed;
            background-size: cover;
            height:100%;
        }

        h1 {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            float: left;
            width: 100%;
            color: white;
            font-size: 58px;
            margin-top: -10px;
            font-weight: 800;
            text-align: center;
        }

        #form-main{
            width:100%;
            float:left;
        }

        #form-div {
            padding-left:40px;
            padding-right:40px;
            padding-top:40px;
            padding-bottom:40px;
            width: 700px;
            left: 40%;
            position: absolute;
            margin-top:25px;
            margin-left: -260px;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            background: linear-gradient(135deg, rgb(85, 239, 203) 0%, rgb(30, 87, 153) 0%,rgba(85,239,203,1) 0%, rgb(91, 202, 255) 100%);
        }

        .feedback-input {
            color:#3c3c3c;
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            font-weight:500;
            font-size: 18px;
            border-radius: 0;
            line-height: 22px;
            background-color: #FFFFFF;
            padding: 13px 13px 13px 54px;
            margin-bottom: 10px;
            width:100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border: 3px solid rgba(0,0,0,0);
        }

        .feedback-input:focus{
            background: #FFFFFF;
            box-shadow: 0;
            border: 3px solid #3c84fb;
            color: #3d3d3d;
            outline: none;
            padding: 13px 13px 13px 54px;
        }

        #isarclogo {
            transition: 2s;
            display: block;
            margin: 0 auto;
            padding-bottom: 10px;
        }

        #isarclogo:hover {
            opacity: 0.8;
        }

        #isarclogo { transition: all .3s ease-in-out; }
        #isarclogo:hover { transform: scale(1.1); }

        /* Icons ---------------------------------- */

        #username{
            background-image: url(http://horisontrejser.dk/media/2454/icon.png);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #username:focus{
            background-image: url(http://horisontrejser.dk/media/2454/icon.png);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
            opacity: 0.9;
        }

        #password{
            background-image: url(https://ftrsecure.com/sites/default/files/product-icons/computer-security.png);
            background-size: 32px 32px;
            background-position: 9px 8px;
            background-repeat: no-repeat;
        }

        #password:focus{
            background-image: url(https://ftrsecure.com/sites/default/files/product-icons/computer-security.png);
            background-size: 32px 32px;
            background-position: 9px 8px;
            background-repeat: no-repeat;
            opacity: 0.9;
        }

        textarea {
            width: 100%;
            height: 180px;
            line-height: 150%;
            resize:none;
        }
        }

        input:hover, textarea:hover,
        input:focus, textarea:focus {
            background-color:white;
        }

        #button-blue{
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            float:left;
            width: 100%;
            border: #ffffff solid 5px;
            cursor:pointer;
            background: #509bcf;
            color:white;
            font-size:24px;
            padding-top:22px;
            padding-bottom:22px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            transition: all 0.5s;
            margin-top:-4px;
            font-weight:800;
        }

        #button-blue:hover{
            background-color: rgba(0,0,0,0);
            color: #1e5799;
        }

        .submit{
            padding-top:16px;
        }

        .submit:hover {
            color: rgb(42, 169, 227);
        }

        .ease {
            width: 0;
            height: 74px;
            background: #5bcaff;
            -webkit-transition: .5s ease;
            -moz-transition: .5s ease;
            -o-transition: .5s ease;
            transition: .5s ease;
        }

        .submit:hover .ease{
            width:100%;
            background: linear-gradient(135deg, rgb(30, 87, 153) 0%, rgb(30, 73, 138) 0%, rgb(30, 92, 160) 0%, rgb(91, 202, 255) 100%);
        }

        @media only screen and (max-width: 580px)
        {
            #form-div{
                left: 3%;
                margin-right: 3%;
                width: 88%;
                margin-left: 0;
                padding-left: 3%;
                padding-right: 3%;
            }
        }
    </style>

    <script>
        function sendForm()
        {
            event.preventDefault();

            var title=document.getElementById("title").value;
            var author=document.getElementById("author").value;
            var content=document.getElementById("content").value;

            var xhttp=new XMLHttpRequest();

            xhttp.onreadystatechange=function()
            {
                if(this.readyState==4&&this.status==200)
                {
                    var log = JSON.parse(this.responseText);
                    console.log(log);
                    console.log(log.title);
                    console.log(log.author);
                    console.log(log.content);

                    document.getElementById("result").innerHTML=log.title;

                }
            };

            xhttp.open("POST",window.location.pathname.split("/").pop(),true);

            xhttp.setRequestHeader("Content-type","Application/x-www-form-urlencoded");

            xhttp.send("title="+title+"&author="+author+"&content="+content);

        }

        $( "li" ).hover(
            function() {
                $(this).find("span").stop().animate({
                    width:"100%",
                    opacity:"1",
                }, 400, function () {
                })
            }, function() {
                $(this).find("span").stop().animate({
                    width:"0%",
                    opacity:"0",
                }, 400, function () {
                })
            }
        );

    </script>

    </html>

    <?php

}

?>
