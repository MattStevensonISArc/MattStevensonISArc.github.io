
<!-- PHP -->

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
        echo "Connection Successful";

        $title="$_POST[title]";
        $author="$_POST[author]";
        $content="$_POST[content]";
        $today=date("Y-m-d");

        $sql="INSERT INTO logentries(title,author,content,date_created)VALUES('$title','$author','$content','$today')";
        $db->exec($sql);
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

        <title>"What's New?"</title>

    </head>

    <body>

    <div id="form-main">
        <div id="form-div">
            <form class="form" method="post" id="form1">

                <div class="input-group">
                    <h1 id="h1-div">"WHAT'S NEW?"</h1>
                    <p class="name">
                        <input name="title" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="title" placeholder="Title" />
                    </p>

                    <p class="user">
                        <input name="author" type="text" class="validate[required,custom[email]] feedback-input" id="author" placeholder="User" />
                    </p>

                    <textarea name="content" class="validate[required,length[6,300]] feedback-input" id="content" placeholder="Enter Log"></textarea>

                    <div class="submit">
                        <input type="button" value="POST." id="button-blue" onclick="sendForm()"/>
                        <div class="ease"></div>
                    </div>

            </form>

        </div>
    </body>

    <style>
        @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);


        html
        {   background:url(http://www.prax.sk/wp-content/uploads/2014/11/background_blue_v0011.jpg) no-repeat;
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
            margin-top:30px;
            margin-left: -260px;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            background: #454545;
            opacity:0.8;
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

        /* Icons ---------------------------------- */
        #title{
            background-image: url(http://www.jan.instante.justice.md/sites/jil.instante.justice.md/files/doc_icon.png);
            background-size: 33px 33px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #title:focus{
            background-image: url(http://www.jan.instante.justice.md/sites/jil.instante.justice.md/files/doc_icon.png);
            background-size: 33px 33px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
            opacity: 0.9;
        }

        #author{
            background-image: url(http://horisontrejser.dk/media/2454/icon.png);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #author:focus{
            background-image: url(http://horisontrejser.dk/media/2454/icon.png);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
            opacity: 0.9;
        }

        #content{
            background-image: url(https://cdn3.iconfinder.com/data/icons/simplius-pack/512/pencil_and_paper-512.png);
            background-size: 27px 27px;
            background-position: 13px 8px;
            background-repeat: no-repeat;
        }

        #content:focus{
            background-image: url(https://cdn3.iconfinder.com/data/icons/simplius-pack/512/pencil_and_paper-512.png);
            background-size: 27px 27px;
            background-position: 13px 8px;
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
                    console.log(this.responseText)
                }
            };

            xhttp.open("POST",window.location.pathname.split("/").pop(),true);

            xhttp.setRequestHeader("Content-type","Application/x-www-form-urlencoded");

            xhttp.send("title="+title+"&author="+author+"&content="+content);

        }

    </script>

    </html>

    <?php

}

?>