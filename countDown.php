<!DOCTYPE html>

<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed|Permanent+Marker" rel="stylesheet">

    <title>Count Down Timer</title>

</head>

<body>

<div id="form-main">
    <div id="form-div">
        <form class="form" id="form1">

            <div class="jumbotron1 text-center" id="jumbotron1">
                <h1>"WHAT'S NEW?"</h1>
            </div>

            <p class="name">
                <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="title" placeholder="Title" />
            </p>

            <p class="user">
                <input name="user" type="text" class="validate[required,custom[email]] feedback-input" id="user" placeholder="User" />
            </p>

                <textarea name="content" class="validate[required,length[6,300]] feedback-input" id="log" placeholder="Enter Log"></textarea>
            </p>


            <div class="submit">
                <input type="submit" value="POST." id="button-blue"/>
                <div class="ease"></div>
            </div>
        </form>
    </div>

</body>

<style>
    @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);

    html
    {   background:url(https://forrst-live.s3.amazonaws.com/multiposts/images/70814/original.png?1394421357) no-repeat;
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
        background-color:rgba(82,82,82,0.5);
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
    }

    .feedback-input {
        color:#3c3c3c;
        font-family: 'Montserrat', Arial, Helvetica, sans-serif;
        font-weight:500;
        font-size: 18px;
        border-radius: 0;
        line-height: 22px;
        background-color: #fbfbfb;
        padding: 13px 13px 13px 54px;
        margin-bottom: 10px;
        width:100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        border: 3px solid rgba(0,0,0,0);
    }

    .feedback-input:focus{
        background: #fff;
        box-shadow: 0;
        border: 3px solid #0490e2;
        color: #4b4b4b;
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
        opacity: 0.8;
    }

    #user{
        background-image: url(http://horisontrejser.dk/media/2454/icon.png);
        background-size: 30px 30px;
        background-position: 11px 8px;
        background-repeat: no-repeat;
    }

    #user:hover{
        background-image: url(http://horisontrejser.dk/media/2454/icon.png);
        background-size: 30px 30px;
        background-position: 11px 8px;
        background-repeat: no-repeat;
        opacity: 0.8;
    }

    #log{
        background-image: url(https://cdn3.iconfinder.com/data/icons/simplius-pack/512/pencil_and_paper-512.png);
        background-size: 27px 27px;
        background-position: 13px 8px;
        background-repeat: no-repeat;
    }

    #log:focus{
        background-image: url(https://cdn3.iconfinder.com/data/icons/simplius-pack/512/pencil_and_paper-512.png);
        background-size: 27px 27px;
        background-position: 13px 8px;
        background-repeat: no-repeat;
        opacity: 0.8;
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
        border: #fbfbfb solid 4px;
        cursor:pointer;
        background-color: #594b41;
        color:white;
        font-size:24px;
        padding-top:22px;
        padding-bottom:22px;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        margin-top:-4px;
        font-weight:800;
    }

    #button-blue:hover{
        background-color: rgba(0,0,0,0);
        color: #ffffff;
    }

    .submit:hover {
        color: rgb(255, 255, 255);
    }

    .ease {
        width: 0;
        height: 74px;
        background-color: #ffffff;
        -webkit-transition: .5s ease;
        -moz-transition: .5s ease;
        -o-transition: .5s ease;
        transition: .5s ease;
    }

    .submit:hover .ease{
        width:100%;
        background-color: #3c84fb;
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

</html>