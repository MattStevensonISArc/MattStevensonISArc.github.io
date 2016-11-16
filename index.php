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

        $title="$_POST[title]";
        $author="$_POST[author]";
        $content="$_POST[content]";
        $today=date("Y-m-d");

        $sql="INSERT INTO logentries(title,author,content,date_created)VALUES('$title','$author','$content','$today')";
        $db->exec($sql);
    }
}


else{
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
    ?>

    <!-- HTML -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Home Page</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bungee+Inline|Bungee+Shade|Baloo+Paaji|Wire+One|Cabin|Fjalla+One|Josefin+Slab|Lobster|Lobster+Two|Oleo+Script|Changa|Pacifico|Satisfy|Farsan" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom CSS Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>


<!--Navbar-->

<nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

    <!-- Collapse button-->

    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
        <i class="fa fa-bars"></i>
    </button>

    <!--Collapse content-->

    <div class="collapse navbar-toggleable-xs" id="collapseEx">
        <!--Links-->
            <ul class="nav navbar-nav smooth-scroll">
            <li class="nav-item">
                <a class="nav-link" href="#splashPage" data-toggle="tooltip" data-placement="bottom" title="Home"><i class="material-icons">home</i><span class="sr-only">(current)</span> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#jumbotron0" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="material-icons">face</i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#jumbotron1" data-toggle="tooltip" data-placement="bottom" title="View Logs"><i class="material-icons">list</i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="createLog.php" data-toggle="tooltip" data-placement="bottom" title="Create Log"><i class="material-icons">create</i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#jumbotronEdit" data-toggle="tooltip" data-placement="bottom" title="Edit Logs"><i class="material-icons">library_books</i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#jumbotronFeedback" data-toggle="tooltip" data-placement="bottom" title="Feedback"><i class="material-icons">mail</i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#jumbotronContact" data-toggle="tooltip" data-placement="bottom" title="Contact Us"><i class="material-icons">person_pin</i> </a>
            </li>
                <li class="pull-right" id="JSDEMO">
                    <a class="nav-link" href="demo.html" data-toggle="tooltip" data-placement="bottom" title="JavaScript"><i class="material-icons">code</i> </a>
                </li>
            </ul>
    </div>
</nav>
<!--/.Navbar-->

<!--Mask-->
<div class="view hm-black-light" id="splashPage">
    <div class="full-bg-img flex-center">
        <ul>
            <a href="http://www.isarc.co.uk"><img src="isarc.png" id="isarclogo" width="83" height="56" class="wow fadeInUp"></a>
            <hr>
            <li>
                <h1 class="wow fadeInDown">Placement Log</h1>
                <hr>
                <h5 class ="wow fadeInUp"><small>- Created by -</small></h5>
                <p class ="wow fadeInDown" id="intro">Matt Stevenson</p>
            </li>
            <li class="animated fadeIn">
                <a href="#jumbotron1" class="btn btn-primary btn-md wow fadeInLeft"data-wow-delay="0.2s">View Logs  <i class="material-icons">list</i> </a><br>
                <a href="#jumbotronCreate" class="btn btn-info btn-md wow fadeInRight" data-wow-delay="0.2s">Create Log  <i class="material-icons">create</i></a>
            </li>
            <hr>
            <ul class="social-icons icon-circle list-unstyled list-inline">
                <li class="animated fadeIn wow fadeIn"><a href="https://www.android.com/intl/en_uk/" data-toggle="tooltip" data-placement="bottom" title="Android"><i class="fa fa-android"></i></a> </li>
                <li class="animated fadeIn wow fadeIn"> <a href="https://www.apple.com" data-toggle="tooltip" data-placement="bottom" title="Apple"><i class="fa fa-apple"></i></a> </li>
                <li class="animated fadeIn wow fadeIn"> <a href="https://www.microsoft.com/en-gb/windows-10/dellxps13?WT.srch=1&WT.mc_ID=SEM_7Dj5oySt" data-toggle="tooltip" data-placement="bottom" title="Windows"><i class="fa fa-windows"></i></a></li>
            </ul>
        </ul>
    </div>
</div>

<section class="container">
    <a href="#splashPage"><img src="up-arrowFlat.png" class="scrollToTop wow fadeIn" id="upArrowPageTop" width="30" height="30"></a>
</section>

<!-- Main container-->
<div class="jumbotron0 text-center" id="jumbotron0">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div data-wow-delay="0.5s" class="wow zoomIn center">
        <img class="img-thumbnail img-circle" data-wow-delay="0.5s" id="avatar" src="avatar.jpg" alt="Photo of Me" height="170px" width="320px">
    </div>
</div>
<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="divider-new">
        <h4 class="h2-responsive wow fadeInDown"><small>Hi, I'm Matt!</small></h4>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="container" align="center">
                <div data-wow-delay="0.3s" class="wow rollIn center">
                    <img class="img-circle img-thumbnail" id="avatar1" src="avatar2.jpg" alt="Photo of Me">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <section id="greeting" class="text-xs wow fadeInUp" data-wow-delay="0.2s">

                        <h4>My name is Matt Stevenson, I'm twenty years old and I'm a third year student at the Ulster University, Coleraine.
                            Currently, I'm out of Uni and on a one year placement - where I work and study in 'ISArc',
                            a Software Development company who have taken on three voluntary placement students, including myself.
                            <br>
                            <br>
                            This Website has been created with regards to a Level 3 Certificate in Web Design and Development (RQF), that I wish to obtain whilst here at ISArc.
                            During the course of a 6-8 week period, I will further develop this site to be a Log Entry site that can not only allow me to post up-to-date logs to my learning
                                                    but allow them to be viewed collectively, be edited and for Feedback to be sent me via email.
                            <br>
                            <br>
                        </h4>
                        <hr>
                        <br>
                        <h5><small><i>“If you can't explain it to a six year old, you don't understand it yourself.” ― Albert Einstein</i></small></h5>

                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="divider-new">
        <h4 class="h2-responsive wow fadeInDown"><small>Features</small></h4>
    </div>

    <section id="features">

        <div class="row">
            <!--First columnn-->
            <div class="col-md-4">
                <!--Card-->
                <div class="container" align="center">
                    <a href="#jumbotron1"></a>
                        <div data-wow-delay="0.5s" class="wow flipInX center">
                            <img class="img-thumbnail img-circle" id="viewLogsIcon" src="viewLogs.png" alt="view logs flat" height="150px" width="300px">
                        </div>
                </div>
                <br>
                <div class="card wow fadeInUp">
                    <!--Card content-->
                    <div class="card-block text-xs-center">
                        <!--Title-->
                        <h4 class="card-title">View all Journal logs.</h4>
                        <a href="#jumbotron1" class="waves-effect waves-light btn-large btn btn-info wow bounceInUp" data-wow-delay="0.1s"><i class="material-icons">create_new_folder</i></a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-md-4">
                <!--Card-->
                <div class="container" align="center">
                    <a href="createLog.php">
                        <div data-wow-delay="0.5s" class="wow flipInX center">
                            <img class="img-thumbnail img-circle" id="createLogIcon" src="createLog.png" alt="create log flat" height="150px" width="300px">
                            </div>
                    </a>
                </div>
                <br>
                <div class="card wow fadeInUp">
                    <!--Card content-->
                    <div class="card-block text-xs-center">
                        <!--Title-->
                        <h4 class="card-title">Create a new Journal log.</h4>
                        <a href="createLog.php" class="waves-effect waves-light btn-large btn btn-info wow bounceInUp" data-wow-delay="0.1s"><i class="material-icons">assignment</i></a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-md-4">
                <!--Card-->
                <div class="container" align="center">
                    <a href="#jumbotronFeedback">
                        <div data-wow-delay="0.5s" class="wow flipInX center">
                            <img class="img-thumbnail img-circle" id="sendFeedbackIcon" src="sendFeedback.png" alt="send feedback flat" height="150px" width="300px">
                        </div>
                    </a>
                </div>
                <br>
                <div class="card wow fadeInUp">

                    <!--Card content-->
                    <div class="card-block text-xs-center">
                        <!--Title-->
                        <h4 class="card-title">Send me some feedback.</h4>
                        <a href="#jumbotronFeedback" class="waves-effect waves-light btn-large btn btn-info wow bounceInUp" data-wow-delay="0.1s"><i class="material-icons">email</i></a>
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>

    </section>
</div>
<br>
<br>
<!--/Section: Best features-->
<div class="jumbotron1 text-center" id="jumbotron1">
    <br>
    <br>
    <br>
    <br>
    <h1 class="wow fadeInDown"><b>Log Entries </b></h1>
    <h5 class ="wow fadeInUp">A collection of all my logs</h5>
    <br>
    <br>
    <br>
</div>

<div class="container">
    <div class="divider-new">
        <table class="table table-hover table-striped table-lg">
            <thead>
            <tr>
                <th>User:</th>
                <th>Entry Title:</th>
                <th>Entry Number:</th>
                <th>Date Published:</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Matt Stevenson</td>
                <td>HTML & CSS 1</td>
                <td>001</td>
                <td>08/09/16</td>
                <td class="logItem">
                    <a href="##log001" data-toggle="tooltip" data-placement="bottom" title="Log 001"><i class="fa fa-search" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Matt Stevenson</td>
                <td>HTML & CSS 2</td>
                <td>002</td>
                <td>14/09/16</td>
                <td class="logItem">
                    <a href="##log002" data-toggle="tooltip" data-placement="bottom" title="Log 002"><i class="fa fa-search" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Matt Stevenson</td>
                <td>HTML & GUI's</td>
                <td>003</td>
                <td>15/09/16</td>
                <td class="logItem">
                    <a href="##log003" data-toggle="tooltip" data-placement="bottom" title="Log 003"><i class="fa fa-search" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Matt Stevenson</td>
                <td>Internet Architecture</td>
                <td>004</td>
                <td>20/09/16</td>
                <td class="logItem">
                    <a href="##log004" data-toggle="tooltip" data-placement="bottom" title="Log 004"><i class="fa fa-search" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Matt Stevenson</td>
                <td>Internet Communication</td>
                <td>005</td>
                <td>28/09/16</td>
                <td class="logItem">
                    <a href="##log005" data-toggle="tooltip" data-placement="bottom" title="Log 005"><i class="fa fa-search" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Matt Stevenson</td>
                <td>Network Maintenance Issues</td>
                <td>006</td>
                <td>21/09/16</td>
                <td class="logItem">
                    <a href="##log006" data-toggle="tooltip" data-placement="bottom" title="Log 006"><i class="fa fa-search" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Matt Stevenson</td>
                <td>Principles of Internet Security</td>
                <td>007</td>
                <td>27/09/16</td>
                <td class="logItem">
                    <a href="##log007" data-toggle="tooltip" data-placement="bottom" title="Log 007"><i class="fa fa-search" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Matt Stevenson</td>
                <td>Essential JavaScript Principles and Practices</td>
                <td>008</td>
                <td>05/10/16</td>
                <td class="logItem">
                    <a href="##log008" data-toggle="tooltip" data-placement="bottom" title="Log 008"><i class="fa fa-search" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Matt Stevenson</td>
                <td>JavaScript Programming Techniques</td>
                <td>009</td>
                <td>10/10/16</td>
                <td class="logItem">
                    <a href="##log009" data-toggle="tooltip" data-placement="bottom" title="Log 009"><i class="fa fa-search" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>Matt Stevenson</td>
                <td>Applied JavaScript</td>
                <td>010</td>
                <td>18/10/16</td>
                <td class="logItem">
                    <a href="##log010" data-toggle="tooltip" data-placement="bottom" title="Log 010"><i class="fa fa-search" aria-hidden="true"></i></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div>
</div>
</div>
<div class="jumbotron2 text-center" id="jumbotronCreate">
    <br>
    <br>
    <br>
    <br>
    <h1 class ="wow fadeInDown"><b>Create a Log </b></h1>
    <h5 class ="wow fadeInUp">Write a new log to add to the list</h5>
    <br>
    <br>
    <br>
</div>

<div>
    <br>
    <br>
    <div class="container">
        <div class="text-center">
            <div class="well">
                <div class="input-group">
                    <h4 class="h2-responsive wow fadeInDown"><small>"What's New?"</small></h4>

                    <form method="post">
                        <label for="title"></label><br>
                        <h5>Log Name:</h5>
                        <input type="text" id="title" class="form-control input-sm chat-input" name="title" placeholder="Name your log..."><br>

                        <label for="author"></label><br>
                        <br>
                        <h5>Username:</h5>
                        <input type="text" id="author" class="form-control input-sm chat-input" name="author" placeholder="Enter your Username..."><br>

                        <label for="content"></label><br>
                        <br>
                        <h5>Log Content:</h5>
                        <textArea id="content" class="form-control input-sm chat-input" name="content" placeholder="Type your Log here..."></textArea><br>
                    </form>

                    <ul>
                        <li class="animated fadeIn">
                            <a href="#" class="btn btn-primary bt-lg pull-right wow fadeInDown" onclick="sendForm()" data-wow-delay="0.2s"><i class="material-icons">exit_to_app</i></a>
                        </li>
                    </ul>


                </div>
                <ul>
                    <li class="animated fadeIn">
                        <button id="show" class="btn btn-info pull-right btn-md  wow fadeInRight" data-wow-delay="0.2s">Show Logs
                        <button id="hide" class="btn btn-info pull-right btn-md wow fadeInLeft" data-wow-delay="0.2s">Hide Logs
                    </li>
                </ul>
                <hr data-brackets-id="12673">
                <div class="container" align="left">
                    <div class="row">
                    <img class="img-circle" id="avatar2" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                    <strong class="primary-font" id="#log001">Matt Stevenson</strong>
                </div>
                <small class="pull-right text-muted">
                    <span class=""><i class="material-icons">watch_later</i></span>08/09/2016</small>
                <br>

                    <?php
                    $sql="SELECT * FROM logentries";
                    $result=$db->query($sql);
                    while($row=$result->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <h6 class="ui-state-default"><?php echo $row['title'] ?></h6>
                        <h6><?php echo $today['date'] ?></h6>
                        <br>
                        <h6><?php echo $author['author'] ?></h6>
                        <div class="scroll">
                            <h6>
                                <?php echo $row['content'] ?>
                            </h6>
                        </div>
                        <?php
                    }
                    ?>

                <h5 class="ui-state-default" id="#001">Log 001: HTML & CSS 1</h5>
                <br>
                <div class="scroll"><h6>Today is Thursday the 8th of September, thus far the other placement students and I have been imaging our MacBook Pro’s, downloading and installing programs relating to
                    the work we will be doing over the course of the year.

    Today, Alan has tasked us with ‘HTML & CSS 1’, which asks us to “Make a webpage in a folder on your desktop using a text editor”. To begin with I have installed ‘PhpStorm’,
                    a commercial IDE for HTML, PHP and JavaScript. Using PhpStorm I created a New Project with a blank .html file called ‘index’, giving the document a ‘document type’ of ‘html’,
                    this informs the browser used to load the page what type of file is being loaded. I then added a structure to the document, using ‘html’, ‘head’ and ‘body’ tags, these tags allow
                    for a basic page layout and form the building blocks required to create the rest of the webpage.
                    <br>
                    <br>
    From here I reverted back to my guidelines in which I’m asked to add several elements to the webpage, one of which was to include my name as a ‘header’. A header in html
                    is an element that offers a selection of text sizes to chose from, I used the ‘h1’ header tag although there are header tags h1 through to h6, h1 being the largest and h6
                    being the smallest. For my introductory paragraph I used ‘p’ tags to create the paragraph, the paragraph element differs from that of the header elements as it is used when
                    writing main body text that can be orientated by style sheets within the webpage, I set this element to ‘fixed-width’, so that it does not change no matter the size of the users
                    display. For the creation of a table within the webpage we have used ‘table’ tags with ‘tr’ tags for table rows, ‘th’ tags for table headings and ‘td’ for table data/contents,
                                                                                                                                                                               I set this element to ‘fluid’, which allows the table to resize itself depending on the size of the users display. Creating a hyperlink for ‘W3 Schools’ was rather simple in that
                    using an ‘anchor’ tag ‘a’ and referencing a desired URL within quotations creates the hyperlink, then any text included will redirect the user to the destination upon clicking it.
                    <br>
                    <br>
    In terms of CSS, I included a set of ‘style’ tags in the ‘head’ section of my HTML document, within these tags I have edited the webpage’s paragraph text using ‘font-family’ -
    set to Arial and ‘font-size’ to ‘22px’, ‘padding-left’ set to ‘50px’ which pads the paragraph text 50 pixels from the left margin of the page, I also set ‘colour’ to white. For
                    headings ‘h2’ and ‘h3’ I set font to Arial and padding-left to ’10px’ and ‘20px’ respectively, with colour set to ‘ghostwhite’, for the ‘body’ of the document I set ‘background-colour’
                    to ‘grey’ - these colour names are preloaded into HTML and CSS and I did not use a Hexadecimal colour code to set them.
                    <br>
                    <br>
    I used ‘Quicktime Player’ to create a new voice recording and record myself speaking aloud “Welcome to my Placement Log”. By default the file was saved as a ‘.m4a’ audio file,
                    something we weren't interested in as the assessment criteria asks that we include both a ‘.mp3’ file and a ‘.ogg’ file, having taken this into consideration I converted the file
                    to the appropriate file formats using a online converter and saved them to my Projects folder. To create the audio player I used ‘audio’ tags, using the ‘controls’ attribute to add
                    audio controls such as play and pause, embedded in the audio tags I referenced each audio file with sources ‘src’ and assigning them a ‘type’ of ‘/ogg’ and ‘/mpeg’ respectively.
                    To view my webpage in a browser format I’m using ‘localhost’, an HTML 5 API.
                </h6>
                </div>
                <hr>
                <div class="container" align="left">
                    <img class="img-circle" id="avatar3" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                    <strong class="primary-font" id="#log002">Matt Stevenson</strong>
                </div>
                <small class="pull-right text-muted">
                    <span class=""><i class="material-icons">watch_later</i></span>13/09/2016</small>
                <br>
                <h5 class="ui-state-default">Log 002: HTML & CSS 2</h5>
                <br>
                <h6>Having completed HTML & CSS 1 with reasonable ease, we moved on to HTML & CSS 2. In this section I concentrated a lot more on the CSS of the webpage,
                    the first task was to apply a font change in CSS to an HTML element, I did this by firstly linking my style sheet to the html document in the ‘head’ section then using
                    ‘font-family’ and ‘font-size’ and set them to ‘Arial’ and ‘20px’ respectively. I then emboldened some text in this paragraph using ‘b’ tags, I added a background colour
                    to some of the text using ‘background-colour’ in CSS set to ‘yellow’, as well as a rounded border to a title in CSS setting it to ‘3px’, its style to ‘solid’ and the colour
                    to ‘red’, and finally setting ‘border-radius’ to ‘10px’ to create the rounded corners. Next up I created a ‘hover’ property and a transition effect on an image to make it
                    scale up to 110% of its original size. We we’re asked to create a transition effect of rotate and rotate Y, which we did originally but I removed this feature as it isn’t a
                    very appropriate transition for my webpage. We also created an overlay of position absolute and an unordered list with ‘li’ elements embedded within it with ‘button’ tags to
                    create a list of buttons.
                </h6>
                <hr>
                <div class="container" align="left">
                    <img class="img-circle" id="avatar4" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                    <strong class="primary-font" id="#log003">Matt Stevenson</strong>
                </div>
                <small class="pull-right text-muted">
                    <span class=""><i class="material-icons">watch_later</i></span>14/09/2016</small>
                <br>
                <h5 class="ui-state-default">Log 003: HTML & GUI's</h5>
                <br>
                <h6>In this exercise we experimented with a GUI and uploaded changes made within the GUI to a web server, we used BlueGriffon. Firstly, I entered a header to the page and changed
                    the font to Arial and the size to 24, I then added another table to the page with no contents. We uploaded our edits to the W3 schools validator to validate our projects and check
                    for errors and discrepancies in the code. Finally we uploaded out altered webpage to Git Hub, using the command line to add, commit and push the new page to our Git repositories.
    GUI HTML editors are often evaluated against that of the W3C Accessibility Guidelines, a series of guidelines which ask questions about GUI systems in order to determine if they are
                    more or less accessible to users, for example - The GUI editor BlueGriffon allows us to edit the size and font of text on a page, this is a degree of accessibility that is present within
                    the editor - that is also stated within the WSC’s guidelines.

                </h6>
                <hr>
                <div class="container" align="left">
                    <img class="img-circle" id="avatar5" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                    <strong class="primary-font" id="#log004">Matt Stevenson</strong>
                </div>
                <small class="pull-right text-muted">
                    <span class=""><i class="material-icons">watch_later</i></span>20/09/2016</small>
                <br>
                <h5 class="ui-state-default">Log 004: Internet Architecture</h5>
                <br>
                <div class="scroll"><h6>
    Today we studied a multitude of topics relating to ‘Internet Architecture’, Internet Architecture is a term defining a vast number of networks interconnecting and
    communicating with a common protocol. So what is a Client Server Network? A Client Server Network is a centralised network connected to a high performance machine,
                    called a ‘server’, the CSN acts as a ‘hub’ or focal point for other smaller and less powerful machines or nodes. A Client has certain requirements before it can operate,
                    one main essential is that it has a computer or other device to connect to, this device must contain a network card or be capable of connecting to a modem. A router is also
                    required for Client connectivity, many modern routers have a modem built into them, a browser is also a necessity.<br>
                    <br>

                    Public Switched Telephone Network (PSTN) is a systematic telephone exchange which operates on an international scale, it transmits analogue voice data and signals using copper wires.

    Integrated Services Digital Network (ISDN) is a set of standards for communication and transmission of data such as audio and video, ISDN operates on top of the PSDN.

    Digital Subscriber Line (DSL) is in referral to a ‘modem’ something very common in most homes of the modern age, a DSL modem can be connected to a router and a broadband telephone
                    line in order to allow a computer or other device to access Internet services.

    Internet Protocol (IP) is a protocol which allows for both sending and receiving data packets over the Internet, the protocol defines a format for data sent and received along with
                    deciding upon a method by which data is to be sent.

    Open Systems Interconnection Model (OSI Model) is a conceptual model with 7 main layers, it characterises how applications can communicate over a network, allowing software programs
                    to operate together.

    Remote Access Protocols and Services (RAP) are what allows a computer node with use of Point-to-point client software to connect to a host computer, often from a remote location - this is
                    called a Remote Access Server. Point-to-point (PPP) is a protocol which establishes a direct link between two machines, often simply one node connected to a server. PPPoE or Point-to-point over
                    Ethernet is a network specification for establishing a connection between one or more computer nodes over a local area network to a remote location or site, the PPP protocol frameset is said to be
                    ‘encapsulated’ within the frames of the Ethernet frame - my understanding of this is that PPP allows a direct connection between two nodes, and the Ethernet specification which allows multiple users/nodes
                    to connect in a LAN connection.


    Ajax (JavaScript) is a script that allows communication between the client and a server without the need for a complete refresh of the page.
    Point of Presence (POP) is an access point or interface point in which multiple networks connect to each other, often referring to a location or facility that allows nodes to connect
                    to the Internet.<br>
                    <br>

    Internet eXchange Point (IXP) is a network infrastructure that allows ISP’s to exchange internet traffic, there are a very limited amount of them in the world.

    Domain Name Systems (DNS) is a naming system for computers or other devices with Internet connectivity, it looks up addresses using a naming structure of a prefix, subdomain, domain
                    name and an extension. ‘.com’ and the likes are top level domain names, ‘.co.uk' is a second level domain name.

                    Shared Domains are alterations of the subdomains part of an address, allowing separate parts of a server to be accessed using domain registrars e.g. https://finance.nowthis.tech.

                    Cloud Computing is a form of storing and processing data over the Internet without the use of a local server, instead, a variation of remote servers are used to host the network
                    and allow access from remote locations, it’s use is often associated with improved disaster recovery. One downside to Cloud computing is that a user must have Internet connectivity
                    in order to use it.

                    Rich Site Summary (RSS) also known as ‘Really Simple Syndication’ is content delivery method for blogs on the Internet, when content is distributed it is called an RSS feed.
                </h6>
                </div>
                <hr>
                <div class="container" align="left">
                    <img class="img-circle" id="avatar6" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                    <strong class="primary-font" id="#log005">Matt Stevenson</strong>
                </div>
                <small class="pull-right text-muted">
                    <span class=""><i class="material-icons">watch_later</i></span>21/09/2016</small>
                <br>
                <h5 class="ui-state-default">Log 005: Internet Communication</h5>
                <br>
                <div class="scroll"><h6>In today’s world, there is very limited legislation with relevance to using or misusing the Internet and different forms of communication, although some legislation does exist in
                    that if a message sent over the Internet is forwarded with the intent to cause anxiety - it is illegal (Malicious Communications Act 1988).

                    Voice Over IP (VoIP) is a connection that allows a home telephone/landline to link with a mobile phone, with use of the Internet.

                    Presencing is a form of defining a devices location whilst connected to a server, whilst connected a location can be pinpointed to the server and information on a devices
                    whereabouts can be shared with other people and devices.

                    Mobile Computing is a wireless technology that allows the transmission of data and information with no physical connection to a server or network, data such as audio and video
                    can be shared from mobile to phones to remote locations around the world with use of the Internet.

                    Conversion Voice to Text is a complex technology which allows voice input to be converted to textual data on a computer, to be sent to a recipient.

                    Social Media is omnipresent in todays society and a lot of people around the world rely on it as a form of communication and marketing, having said this the forms of social
                    media available to us do not follow the exact same format when considering the content that they allow to be shared. For example, Twitter requires short, concise messages which are usually
                    posted with regards to general communication between friends or associates, whereas Youtube is one that requires planned and refined media production in the form of videos.
                    <br>
                    <br>
                    Rich Internet Applications (RIA) are web applications that work in the same manner as desktop applications, using plug-ins, RIA’s act as virtual machines to the browser - Adobe Flash
                    is one of the most used platforms currently.

                    Web-Orientated Architecture (WOA) is a software architecture which adds an extension to SOA (Software Oriented Architecture) in a manner that allows the creation of API’s and web-based
                    user interfaces for various levels of distribution.

                    Social Web is a form of linking people and their devices on the Internet, people with similar interests and tastes can communicate and view or share things depending on what platform
                    they use.

                    Mashup is when two systems are used to create one functional product, two or more services can be joined together to allow one common goal to be achieved.

                    Blogs (RSS) are webpages that are updated on a regular basis with new content and information often used for the means of discussion or conversation between a group of registered users.
                    Blogs can be linked using an RSS feed.

                    Folksonomies are a means of searching a data store using textual properties, such as a hashtag - used by Twitter and Instagram to allow users to refine their news feeds with material
                    they may be interested in. A hashtag is used in order to link users with similar posts and can be searched on the site, a folksonomy is a hashtag that has been created by a user and usually has
                    little or no baring to anything else on the site, unlike common hashtag categories. It seems odd to think about the extreme lack of current legislation regarding the dictation of what we can and
                    can’t do whilst we’re online, the severe lack is partly down to the fact in the past it has taken years, maybe even decades to ‘pass’ valid legislation through government systems - a slow and what
                    seems to be delicate process for the passing of legislation regarding our online conduct. Having said this, there are many organisations with a strong presence online which provide their own ‘ethical
                    conduct’ which is the description of monitoring what happens online, without there being any existing legislation to accompany the concept - take Twitter or YouTube’s verification of user accounts as a
                    good example, Twitter can verify their users whom have a celebrity status or social following, in order to eliminate the theft of their identities or impersonation.


                </h6>
                </div>
                <hr>
                <div class="container" align="left">
                    <img class="img-circle" id="avatar7" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                    <strong class="userName" id="#log006">Matt Stevenson</strong>
                </div>
                <small class="pull-right text-muted">
                    <span class=""><i class="material-icons">watch_later</i></span>27/09/2016</small>
                <br>
                <h5 class="ui-state-default">Log 006: Network Maintenance Issues</h5>
                <br>
                <div class="scroll"><h6>Whilst using a computer, for recreational purposes or as a profession, ensuring security and protecting our devices from the dangers of being connected to the Internet poses is absolutely vital.
                    When using the Internet protecting our computers from counter attacks is of utmost importance, keeping PC’s up to date with the newest updates and security patches helps to fend off malicious attacks
                    which may have been capable of doing damage to your machine otherwise. A lot of users like to utilise IDS’s - Intruder Detection Systems along with that of a built-in Firewall, an IDS is somewhat similar
                    to a Firewall in the fact they both detect for intrusion on a network, but do it in different ways. An IDS analyses all inbound and outbound activity on a network and flags up anything that may appear
                    to be of a malicious origin or an intrusive entity, if an intrusion attempt has been made the IDS signals to the user and notifies them of suspicious activity on the network, even if the attack has
                    originated from within the network itself. When using a Firewall to protect against counter attacks, the Firewall will observe the networks status and upon discovering an abnormality attempting to
                    access the network, it will attempt to stop it - the main difference here is that the Firewall will monitor network traffic and attempt to prevent security breaches as they attempt to gain unauthorised access,
                    but using an IDS can analyse a security risk from within the network if it has already gained access or if it originated from within the network itself. Closing unused or non-essential ports on a network is also
                    crucial in the prevention of hackers and security breaches, ports that are not being used can allow for hackers to gain access and make changes to configurations or distribute content throughout the network.
                    If a network has been experiencing performance issues, abnormal decrease in network speed or connectivity, you may wish to inspect the network closely and attempt to diagnose if there is any unauthorised
                    or malicious activity present on the network that may have gone unnoticed, remaining vigilant when your network is experiencing issues is essential. To ensure utmost data security when operating a functioning
                    network in a workplace, all staff and users must be equip with the appropriate training and knowledge of the risks at hand, and of possible prevention measures that can be taken in order to relieve the system of a
                    security breach - training in these areas will allow for better maintenance of the network and in turn decrease the volumes of stress the network will have to experience due to staff being knowledgeable of Internet and data security procedures.
                    <br>
                    <br>
                    There are a multitude of measures that can be taken to prevent counter attacks to your network, but what if you have already been attacked, or one of your prevention procedures has failed? The first thing to do in any
                    case of an attack is to determine the type of attack that has been posed to the network, along with its location - this can be done in a multitude of ways but if the devices IP address is available, it can be used to
                    pinpoint the attackers location and the address can be blocked and blacklisted from the network. If the attack is indeed an internal attack and has spawned from within the network itself it is advised that all affected
                    units are immediately disconnected from the network. One form of attack which is considered to be extremely detrimental to the wellbeing of a network is a DDoS (Distributed Denial of Service) attack, a DDoS attack describes
                    the flooding of traffic to a network from lots of different devices, this usually occurs when a host computer has been infected with some kind of malicious virus - often a Trojan, which allows a hacker or suspect behind
                    the attack to control the traffic flow to the targeted system. The reasoning for a DDoS attack and not simply a DoS attack is that a DoS attack is essentially the same but the traffic comes from only one device, allowing
                    blocking the IP address of the computer to be an effective means in which to stop the attack at its source, in a DDoS attack as mentioned the traffic pours in from many different sources, often in the hundreds or possibly
                    thousands of PC’s in different locations are all requesting from the network, clogging it with traffic. A DDoS attack is very difficult to stop as it is extremely difficult to distinguish legitimate network traffic from
                    malicious traffic inbound to the network - in the case of a DDoS attack you must contact your Internet Service Provider (ISP) immediately for further instruction and assistance. When the attack has been blocked or interrupted
                    a direct backup of all significant data should be made urgently, along with diagnostics being undertaken in the manner of finding the attacks source, type and intention to further prevent future attacks of the same description.
                    If any data was affected during the attack, lost, stolen or data altered in any way it must be noted and possibly quarantined within the system - any backups that have been made in recent times should be used to reconstruct the system if damage has been caused.
                    A routine should be in order to reinstall operating systems on affected devices, but it also seen as good practice to reinstall OS on devices which have not been affected, even if there has been no attack. Stakeholders that have significant baring to the
                    company or the relevant system that has been affected should be contacted and informed of the incident as soon as possible to allow them to make important decisions regarding their involvement or to initiate an appropriate solution to the problem.
                    <br>
                    <br>
                    What is Social Engineering? What are the risks it poses to our security, and how can we combat it in the most appropriate possible manner? Well, the term ‘social engineering’ is simply defining the act of manipulating a person or group of
                    people in order to gain access to confidential information. A ‘social engineer’ is someone who intentional attempts to deceive someone into giving up their personal information, often passwords, bank details or for access to a device or network with
                    intent to distribute malicious software - to then carry out criminal activity. Social engineering attacks can be directed in many different ways, you may be asked for information that is confidential, or only being available to certain authorised users -
                    if the person requesting this information is unknown to you, or seems to be posing as someone else, do ensure not to make any contact with them. Social engineering attacks often take the form of someone attempting to gain information about a person or a
                    business, in order to prove legitimacy when contacting others to gain access to a body of information, ensuring you keep your wits about you and deter from responding to the likes of suspicious emails known as ‘phishing’ is a good way in which to avoid
                    your information falling into the wrong hands.
                    <br>
                    <br>
                    So, how exactly can we prevent social engineering? In the case of someone making a request to access information which has been made confidential and not available to the general public, they must be identified. Identifying
                    someone who aims to carry out a socially engineered attack is of utmost importance, as anyone who can be identified can be flagged and be blocked from future contact. When users of a system are dealing with unidentified requests
                    from a suspicious origin, they must always follow security procedures and be trained to be knowledgeable of criminal ongoings, along with how to identify possible attacks. If you have been contacted via telephone, persons or businesses
                    often call back the source  from a customer service line, in order to confirm the legitimacy of the call - if you are unsure about something regarding your personal information or the information that is being hosted on a network by your business,
                    do always make sure to attempt to confirm its legitimacy. In the case of someone contacting you with information specific to you, ensure to make changes to any authentication requirements such as passwords or PIN numbers to disallow any further
                    information being leaked to unauthorised persons. If you have noticed suspicious activity on your computer or network, always make thorough checks on your anti-virus software and security logs to confirm this.
                    Symmetric Encryption:
                    A type of encryption which uses a ‘key’ to alter text or messages when being sent over the Internet, this key is available to not only the sender but the recipient of a message as the message is ‘decrypted’ upon arrival at its destination.

                    Asymmetric Encryption:
                    A different manner of encryption which uses a ‘public’ key, which encrypts data before it is sent to the recipient, upon arrival it cannot be decrypted without the use of a ‘private key’ which belongs only to the person receiving the message.
                    This way, a user can encrypt a message and send it to someone else using a public key, but it cannot be decrypted unless a specific ‘private’ key is available to the recipient.

                </h6>
                </div>
                <hr>
                <div class="container" align="left">
                    <img class="img-circle" id="avatar8" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                    <strong class="userName" id="#log007">Matt Stevenson</strong>
                </div>
                <small class="pull-right text-muted">
                    <span class=""><i class="material-icons">watch_later</i></span>27/09/2016</small>
                <br>
                <h5 class="ui-state-default">Log 007: Principles of Internet Security</h5>
                <br>
                <div class="scroll"><h6>Wired Equivalent Privacy (WEP) is the ‘original’ protocol for
                    data encryption which was developed for wireless networks, intended to provide similar
                    levels of security as wired network - although it is known to be difficult to configure
                    and have significant security issues. Wi-Fi Protected Access (WPA) superseded WEP during
                    the development of the 802.11i wireless security standard in 2003, WPA uses both pre-shared
                    keys (PSK) and Temporal Key Integrity Protocol (TKIP) to carry out data encryption. WPA2 is
                    based on the finalised 802.11i security standard, the use of pre-shared keys with Advanced Encryption
                    Standards (AES) is what sets WPA2 apart from WPA - a set of standards which are used in the most current iterations.
                    Authentication provides a network with a control system in which levels of access can be determined, higher levels of
                    access will be unavailable for users of a low level - whereas some access levels can simply be a user logging in.
                    Digital Certificates allow for entities on a network to be individually identified and marked as known. Encryption
                    is a security measure for the sending and receipt (transmission) of data over the Internet, it enforces confidentiality
                    as it is not readable to someone without a specific key - solely intended for a certain recipient. Encryption also enforces
                    integrity as when encrypted data packets are sent they are ‘hashed’, which means that if they are altered before they reach
                    their destination, they cannot be decrypted. Enforcement of non-repudiation with regards to encryption is carried out as the
                    encryption key corresponds directly to the person who has sent it e.g. created using the senders information. Firewalls assist
                    in monitoring computer networks in terms of inbound and outbound requests, if a Firewall locates something attempting to access
                    the network with intent to damage of the entity is unrecognised - it will throw up a flag to the user. A computer virus is a
                    program created to cause harm or carry out fraudulent activity, most viruses are capable of copying themselves and often are designed
                    to gain access to a system, hide and have detrimental effects such as corrupting files. Upon receiving emails containing unfamiliar
                    attachments or mail contents a user should ensure they do not further explore the attachment, as it could be some for of malware or
                    virus intending to corrupt your computer system, all computers should be kept up-to-date with current OS and security patches, have
                    anti-virus software and a Firewall in use.
                    <br>
                    <br>
                    Users should always think before opening unrecognised attachments or visiting suspicious
                    webpages, use passwords which are not easily guessed or hacked and deter from using open Wi-Fi networks, scan using AV Software, confirm
                    attachments with the sender and delete suspicious emails from inbox. Patches and updates in client software are used to fix errors discovers
                    by users or the development team/developer of the software, a ‘patch’ quite literally will add certain aspects to a piece of software which
                    were previously lacking. When an attack is suspected, a user should immediately disconnect from the Internet or LAN network, use anti-virus/malware
                    software to detect malicious intrusions, remove infected files and check other devices which are connected to the network in the case of them being
                    infected also, backups of data should be made. A virus multiples itself as much as possible and attached to host files which, when moved, copied or
                    sent elsewhere, the virus will go too. A worm infects a device with no need for a host file, and can multiply and reiterate itself through a system
                    or group of systems without the need for human interaction. Spyware is software that was solely created and implemented in order to gain information
                    about someone or business, infecting a computer like a virus and lying dormant as it avoids detection, often sending information to another location
                    so that it can be collected and used by creators to carry out fraudulent or criminal activity.Whilst using the Internet users should ensure at all times
                    they are remaining aware and vigilant of the sites, tabs and emails or attachments that they open or share with others, 'Adware' and 'Spyware' are sometimes
                    very hard to remove and even by simply opening an unfamiliar, suspicious email attachment can cause privacy and security concerns for anyone using the Internet.
                    <br>
                    <br>
                    When in the workplace, or at home - we all enjoy browsing the Web, surfing to our favourite sites and enjoying the modern threshold that is social media, but more
                    often than not, there are users of company system which are mistaken when thinking it is always safe to connect ones personal device directly into a company network
                    without having taken any precautions or followed security procedures in order to ensure the well-being of the network and the companies data/applications.
                    Along with this, it is surprising that online copyrighting and pirating still exists, but plays a massive role in todays Internet and for anything with definitive
                    ownership attached to it, the law states that the original creator of a piece of work should have the utmost rights in its use and/or distribution, so in the case of
                    someone who is not the original creator, using or distributing it would be against the law under the Copyright, Designs and Patents Act 1988. Data encryption plays a
                    major role in the security maintenance of company transmissions and allows organisations to safely transmit information and hold secure communications without causes
                    for concern regarding interceptions. Different companies have different policies that have been detailed to define their own personal guidelines to the creation and
                    transmission of encrypted data, files or information - sometimes limiting distribution encryption keys or access to algorithms throughout the company to prevent
                    unauthorised disclosure and/or subsequent fraudulent use of transmitted information. The “Right to be Forgotten” ruling is somewhat of a controversial policy available
                    to users whom, for varying reasons may wish for some data or Internet property about themselves or related to themselves to be removed/deleted when it is ‘no longer necessary’.
                    The right to have your data removed is not always absolute, and sometimes can be contested due to the fact that the information is necessary for something else, is related
                    to something else or has some purpose to a company or other individual with access to it, requests for erasure are handled on a case-by-case basis and are evaluated and is
                    decided on the concept that data storage of personal information is no longer needed or the purpose for which the data was collected is no longer relevant. Possible
                    ramifications of damaging information on the Internet are clear as information which an individual would like to destroy could well be relevant or necessary to an organisation
                    and may be challenged in order to prevent its destruction or erasure.
                </h6>
                </div>
                <hr>
                    <div class="container" align="left">
                        <img class="img-circle" id="avatar9" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                        <strong class="userName" id="#log008">Matt Stevenson</strong>
                    </div>
                    <small class="pull-right text-muted">
                        <span class=""><i class="material-icons">watch_later</i></span>05/10/2016</small>
                    <br>
                    <h5 class="ui-state-default">Log 008: Essential JavaScript Principles and Practices</h5>
                    <br>
                    <div class="scroll"><h6>JavaScript is a object-oriented programming language which is commonly used and utilised by Web Developers and programmers alike to create
                        dynamic effects and features within Webpages. JavaScript is a client-side scripting language which means it solely resides within a web page, and is interpreted
                        and executed within a browser. JavaScript doesn’t require any plug-in installations to use it, unlike the likes of Flash - in which a plug-in is required. It is
                        embedded within HTML code and utilises the DOM (Document Object Model) which uses objects to control aspects of the browser. In JS there are a series of data types;
                        String, Number, Boolean, Undefined and Null, along with that of objects, objects are the most complex of the set as they are said to be ‘mutable’ - meaning that
                        they can be changed by a user/programmer, the rest of the data types are immutable and cannot be changed or altered and are primitively defined. An object is derived
                        from a range of ‘properties’ within JavaScript and properties are defined by the association of a name and a value together - if a properties value is a function,
                        it is called a ‘method’. JS methods are functions which are stored as object properties, for eg. defining ‘objectName( ).methodName( )’ in code would accurately
                        represent objects with regards to methods. JavaScript was initially released in 1996 on Netscape Navigator and Internet Explorer, ever since it has been upgraded
                        and reiterated into newer versions to allow for new capabilities and to accommodate different browsers or web services. In 2005, JavaScript Version 1.6 was released
                        which was the equivalent to ECMAScript for XML features, the most recent versions have been reiterations of version 1.8 which are now available on Mozilla Firefox
                        and Google Chrome as well as Netscape Navigator and Internet Explorer. In JavaScript some applications can run on the server-side of a client-side system, these
                        are called server-side applications and they are created and run on the Web server, whereas client-side applications are handled by the client - a browser.
                        There are a wide range of coding practices a developer must know before beginning to program using JavaScript, making declarations of variables at the top of the document,
                        initialising them when they are declared, using ‘===‘ comparison operators instead of ‘==‘ as ‘==‘ will always convert the two variables to matching data types,
                        use code comments using ‘/*’ to ensure certain sections are labelled and given a brief description. In many programming languages both addition and concatenation are
                        commonly mistaken for one another, addition is the use of a ‘+’ symbol in order to add two numeric values, concatenation on the other hand is the joining of two of
                        more String values within a block of code. In JavaScript however, it is frowned upon to use a ‘+’ symbol in order to concatenate and in fact a method called ‘concat( )’
                        can be used in order to join two Strings instead. Global variables in JavaScript are defined when declared outside of a function, meaning all scripts and other functions
                        within the code can access. A local variable is one that is declared within a function or is passed to a function, meaning if a variable is declared within a function
                        it can only be used within that function.
                    </h6>
                    </div>
                    <hr>
                    <div class="container" align="left">
                        <img class="img-circle" id="avatar10" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                        <strong class="userName" id="#log009">Matt Stevenson</strong>
                    </div>
                    <small class="pull-right text-muted">
                        <span class=""><i class="material-icons">watch_later</i></span>10/10/2016</small>
                    <br>
                    <h5 class="ui-state-default">Log 009: JavaScript Programming Techniques</h5>
                    <br>
                    <h6>When debugging a programmer can use the console to determine which parts of the code are erroneous or broken. Isolating specific parts of
                        the code which you think are effecting the entire program to find out where the errors are, and then fixing them or removing said code. Native debugging tools
                        are such as using console.log(i/x) statements or using breakpoints, supplemental debugging is use of a web browser, plug-ins or online validators in order to debug.
                    </h6>
                    </div>
                  <hr>
            <div class="container" align="left">
                <img class="img-circle" id="avatar11" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                <strong class="userName" id="#log010">Matt Stevenson</strong>
            </div>
            <small class="pull-right text-muted">
                <span class=""><i class="material-icons">watch_later</i></span>18/10/2016</small>
            <br>
            <h5 class="ui-state-default">Log 010: Principles of Database Concepts</h5>
            <br>
            <h6>
                Relational databases were invented in 1970 by IBM and are defined as groupings of data items which have relations to each other, contained in tables, rows and columns.
                Relational databases are in support of Automicity, Consistency, Isolation and Durability (ACID), which is a structure that ensures the correct and reliable process of
                transactions within a database. Non-relational databases or NoSQL databases are involved in the handling and scaling of large quantities of unstructured data, eliminating
                ‘referential integrity’ - a relational database concept which enforces that all relationships regarding tables and data must be consistent. In any non-relational database model
                relationships are a very important aspect, they help to eliminate data redundancy and allow for a more concise and usable database. There are different types of relationships between
                tables and data within databases, one-to-one, one-to-many and many-to-many; each type defines its own form of relationship between different tables - e.g. one-to-many could be a teacher
                within a class of students, as there is one teacher and ‘many’ or multiple students. SQL or Structured Query Language is used within databases to pose ‘queries’ to them, communicate with
                aspects of the databases and to perform tasks such as retrieving data from a table or updating a tables records. MySQL is the database vendor I am most familiar with, but there are also
                Microsoft SQL Servers for databases along with Oracle and IBM DB2.
            </h6>
        </div>
            <hr>
            <div class="container" align="left">
                <img class="img-circle" id="avatar11" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                <strong class="userName" id="#log011">Matt Stevenson</strong>
            </div>
            <small class="pull-right text-muted">
                <span class=""><i class="material-icons">watch_later</i></span>18/10/2016</small>
            <br>
            <h5 class="ui-state-default">Log 011: Applied JavaScript</h5>
            <br>
            <h6>A browser is responsible for protecting a computer from use of client-side JavaScript or XSS injection, this is called cross-site scripting.
                A computers operating system will be in control of anti-virus software programs and/or or Firewall, allowing it to protect against harmful programs.
                Signed scripts are ones that contain a ‘digital signature’ which in turn request more privileges than if they weren’t signed, the signature allows users
                to ensure that their script hasn’t been changed or tampered with since the time it was originally signed. Attackers using XSS to target a victim don’t target
                the hosts computer directly and instead inject a piece of malicious code into a vulnerable part of a webpage in order to deliver harmful script inputs of unvalidated
                code to a hosts computer. XSS can be used is ActiveX and Flash as well as JavaScript although it is the most targeted as it is essential in most browsers for web projection.
                A cookie is a small file that allows for web pages to recognise your computer either temporarily or permanently, they can be used to keep the likes of log in details relevant to
                a specific user or to track a users preferences.
            </h6>
        </div>
        <hr>
            <div class="container" align="left">
                <img class="img-circle" id="avatar11" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                <strong class="userName" id="#log012">Matt Stevenson</strong>
            </div>
            <small class="pull-right text-muted">
                <span class=""><i class="material-icons">watch_later</i></span>18/10/2016</small>
            <br>
            <h5 class="ui-state-default">Log 012: JavaScript Technology Extensions</h5>
            <br>
            <h6>In Javascript there are several ways in which you can load and use scripts and external libraries within your code, firstly one must locate the resource they wish to incorporate
                to their project which means either downloading it as a file or including a specific URL to the code in incorporate the scripts. Referencing a library on your webpage is simple
                in that the external library should be listed with ‘script’ tags within the ‘head’ section of an HTML document. When the external scripts have been referenced they can be initialised
                and event handlers can be used in order to call specific scripts within the code. The ‘XMLHttpRequest’ (XHR) object is an API which contains methods that assist in the communication
                between a browser and a web server - which is used heavily in AJAX programming. The object interacts with XML code using a ‘responseXML’ method, that it can use to retrieve structured
                data by parsing the XML. AJAX makes requests to a web server from a users browser by running a JavaScript function which then creates a XMLHttpRequest, the request is sent to the web
                server with use of either a HTTP ‘POST’ or ‘GET’; which either supply additional data from the client browser or request for the inclusion of all data within a URL, respectively.
                The web server then processes the request, generates a response and sends it back to the browser, JavaScript then parses the server response and the webpage can be updated accordingly
                without the need for a page refresh or reload. Alternatives to using XML-based AJAX responses come in the form of SSE or Server-Sent Events, which perform very similar actions to that
                of XMLHttpRequests as they allow a web page to automatically update from a remote server without refreshing it. When attempting to parse XML responses from AJAX requests there are certain
                XML structures that must be followed; XML demands that there must be a declaration along with a MIME type of ‘text/xml’, they are also limited to a specific size value meaning any
                responses that are sent back to web browsers are also of a limited size.
            </h6>
        </div>

                <div class="container" align="left">
                    <img class="img-circle" id="avatarNew" src="avatar.jpg" alt="Photo of Me" height="60px" width="60px">
                    <strong class="primary-font" id="#log000">Matt Stevenson</strong>
                </div>
                <small class="pull-right text-muted">
                    <span class=""><i class="material-icons">watch_later</i></span></small>
                <div id="dateOutput">

                </div>

                <br>
                <h5 class="ui-state-default"></h5>
                <div id="nameOutput">
                    <br>

                </div>
                <br>
                <div id="contentOutput">
                    <h6>

                    </h6>
                </div>
                <br>
            </div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
        </div>
    </div>
</div>

<div class="jumbotron3 text-center" id="jumbotronFeedback">
    <br>
    <br>
    <br>
    <br>
    <h1 class ="wow fadeInDown"><b>Feedback </b></h1>
    <h5 class ="wow fadeInUp">All Feedback is appreciated!</h5>
    <br>
    <br>
    <br>
    <br>
</div>
<div class="container">

    <div class="row">

        <div class="col-lg-12 col-lg-offset-2">
            <br>
            <br>

            <form id="contact-form" method="post" action="contact.php" role="form">

                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h4 for="form_name">Firstname *</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </h4>
                            </div>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h4 for="form_lastname">Surname *</h4>
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your surname *" required="required" data-error="Surname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h4 for="form_email">Email Address *</h4>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email address *" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h4 for="form_phone">Phone Number</h4>
                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Leave your phone number?">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <h4 for="form_message">Feedback *</h4>
                                <textarea id="form_message" name="message" class="form-control" placeholder=" Any thoughts? *" rows="4" required="required" data-error="Please, leave me some feedback."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-send">Send</button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-muted"><small>Fields with<strong> * </strong>are required.</small></h4>
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>

</div>
<br>
<br>

<div class="jumbotron4 text-center" id="jumbotronContact">
    <br>
    <br>
    <br>
    <br>
    <h1 class ="wow fadeInDown"><b>Contact Us </b></h1>
    <h5 class ="wow fadeInUp">Need to get in touch?</h5>
    <br>
    <div>
        <br>
        <!--Section: Contact-->
        <div class="container-fluid" id="contact">
            <div class="row">
                <!--First column-->
                <div class="col-md-7">
                    <div id="map-container" class="z-depth-1 wow fadeInUp" style="height: 400px"></div>
                </div>
                <!--/First column-->
                <div class="col-md-4">
                    <ul class="text-xs-center">
                        <li class="wow fadeInUp" data-wow-delay="0.2s"><i class="fa fa-map-marker"></i>
                            <h5>ISArc Limited </h5>
                            <h5>Ostix House, 1 Hillmans Court, Coleraine</h5>
                            <h5>BT52 2DF</h5>
                        </li>
                        <hr>
                        <li class="wow fadeInUp" data-wow-delay="0.3s"><i class="fa fa-phone"></i>
                            <h5>028 2073 1499 (07903631464)</h5>
                        </li>
                        <hr>
                        <li class="wow fadeInUp" data-wow-delay="0.3s"><i class="fa fa-clock-o"></i>
                            <h5>9am – 5pm</h5>
                        </li>
                        <hr>
                        <li class="wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-envelope"></i>
                            <h5>matthew.stevenson@isarc.co.uk</h5>
                        </li>
                        <hr>
                    </ul>
                </div>
                <!--/Second column-->
            </div>
        </div>
        <!--Section: Contact-->
        <!--Mask-->
        <!--/ Main container-->
        <br>
        <!--Footer-->
        <footer class="page-footer center-on-small-only mdb-color darken-4">
            <br>
            <!--Footer Links-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title">GETTING IN CONTACT</h5>
                <hr>
                <h4>If you wish to contact me, find my details in the 'Contact' section.
                    <br>
                    <br>
                    My contact details include options for both telephone and email, if you'd like to email me directly from the page,
                    you may send me an email via the 'Feedback' form.
                </h4>
            </div>
            <!--/.First column-->
            <hr class="hidden-md-up">
            <!--Second column-->
            <div class="col-md-3.5 offset-md-1">
                <h5 class="title">Credited Sources</h5>
                <hr>
                <ul class="social-icons icon-circle list-inline">
                    <li> <a href="http://www.w3schools.com/html/html5_intro.asp" data-toggle="tooltip" data-placement="top" title="HTML 5"><i class="fa fa-html5"></i></a></li>
                    <li><a href="http://www.w3schools.com/css/css3_intro.asp" data-toggle="tooltip" data-placement="top" title="CSS 3"><i class="fa fa-css3"></i></a></li>
                    <li> <a href="https://github.com/MattStevensonISArc/MattStevensonISArc.github.io" data-toggle="tooltip" data-placement="top" title="GitHub"><i class="fa fa-github"></i></a></li>
                    <li> <a href="https://bitbucket.org" data-toggle="tooltip" data-placement="top" title="BitBucket"><i class="fa fa-bitbucket"></i></a> </li>
                    <li> <a href="http://stackoverflow.com" data-toggle="tooltip" data-placement="top" title="Stack Overflow"><i class="fa fa-stack-overflow"></i></a></li>
                    <li> <a href="https://www.dropbox.com" data-toggle="tooltip" data-placement="top" title="DropBox"><i class="fa fa-dropbox"></i></a></li>
                    <li> <a href="https://www.maxcdn.com" data-toggle="tooltip" data-placement="top" title="MaxCDN"><i class="fa fa-maxcdn"></i></a></li>
                    <li> <a href="https://www.pagelines.com" data-toggle="tooltip" data-placement="top" title="PageLines"><i class="fa fa-pagelines"></i></a></li>
                    <li> <a href="http://stackexchange.com" data-toggle="tooltip" data-placement="top" title="Stack Exchange"><i class="fa fa-stack-exchange"></i></a></li>

                </ul>
            </div>
            <!--/.Second column-->
            <hr class="hidden-md-up">
            <!--Third column-->
            <div class="col-md-3.5">
                <h5 class="title">Social</h5>
                <hr>
                <ul class="social-icons icon-circle list-inline">

                    <li> <a href="https://www.facebook.com/ISArcLimited/?fref=ts" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li> <a href="https://twitter.com/isarclimited" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li> <a href="https://www.youtube.com/watch?v=BrRJvPB5W0k" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                    <li> <a href="https://uk.pinterest.com" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li> <a href="https://www.skype.com/en/" data-toggle="tooltip" data-placement="top" title="Skype"><i class="fa fa-skype"></i></a></li>
                    <li> <a href="https://www.instagram.com/explore/locations/934269295/" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li> <a href="https://www.linkedin.com/in/matt-stevenson?trk=nav_responsive_tab_profile_pic" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li> <a href="https://accounts.google.com/ServiceLogin?elo=1#identifier" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                    <li> <a href="https://trello.com" data-toggle="tooltip" data-placement="top" title="Trello"><i class="fa fa-trello"></i></a></li>
                </ul>
            </div>
            <br>
            <!--Call to action-->
            <!--/.Call to action-->

            <!--Copyright-->
            <div class="footer-copyright">
    Matt Stevenson -
                <a href="http://www.isarc.co.uk"> ISArc Ltd. </a>
                <small>© 2016</small>
            </div>
    <!--/.Copyright-->
    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script>
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"
        </script>
    <script>
    $(document).ready(function(){

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
                return false;
            });

    });
    </script>



    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

    <div id="map"></div>
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCLZ9L9y3FPhCU0fcWVoyI6Cw7KL3AAr4&callback=initMap"
            async defer></script>

    <script>
        function init_map() {

            var var_location = new google.maps.LatLng(55.132903, -6.656119);

            var var_mapoptions = {
                center: var_location,

                zoom: 14
            };

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "New York"
            });

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                    var_mapoptions);

            var_marker.setMap(var_map);

        }

        google.maps.event.addDomListener(window, 'load', init_map);
    </script>

    <!-- Animations init-->
    <script>
    new WOW().init();
    </script>
    <!-- Tooltips -->
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#hide").click(function () {
            $("h6").hide();
            $("div.scroll").hide();
        });
        $("#show").click(function () {
            $("h6").show();
            $("div.scroll").show();
        });
    });
    </script>
    <script>
        function log(name, content, entryDate){
            this.logName = name;
            this.logContent = content;
            this.logDate = entryDate;
        }
        function checkTags(content){
            if(content.search('<') >= 0) {
                return true;
            }
            else{
                return false;
            }
        }
        function checkContent(content){
            return Boolean(content);
        }

        log.prototype.save=function(){
            localStorage.save(this.logName, JSON.stringify(this));
        }

        function createLog() {
            if (document.getElementById("content") == null) {
                alert("Text Box doesn't exist.");
            }
            else {
                var content = document.getElementById("textArea").value;
                var hasContent = checkContent(content);
                if (hasContent) {
                    var hasTags = checkTags(content);
                    if (hasTags) {
                        alert("You have entered < > tags, please remove them.")
                    }
                    else {
                        var promptResponse = prompt("Name your Log:");
                        var date = new Date();
                        alert(date);
                        var logEntry = new log(promptResponse, content, date);
                        localStorage.setItem(promptResponse, JSON.stringify(logEntry));
                        var retrieveLog = JSON.parse(localStorage.getItem(promptResponse));
                        document.getElementById("contentOutput").innerText = retrieveLog.logContent;
                        document.getElementById("nameOutput").innerText = retrieveLog.logName;
                        document.getElementById("dateOutput").innerText = retrieveLog.logDate;
                    }
                }
                else
                {
                    alert("No Content");
                }
            }
        }
    </script>
    <script>
    $(function () {

        $('#contact-form').validator();

        $('#contact-form').on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                var url = "contact.php";

                $.ajax({
                        type: "POST",
                        url: url,
                        data: $(this).serialize(),
                        success: function (data)
                        {
                            var messageAlert = 'alert-' + data.type;
                            var messageText = data.message;

                            var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                            if (messageAlert && messageText) {
                                $('#contact-form').find('.messages').html(alertBox);
                                $('#contact-form')[0].reset();
                            }
                        }
                    });
                    return false;
                }
        })
        });
    </script>
    <script src="validator.js"></script>
    <script src="contact.js"></script>

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


    </div>
    </div>
</body>

</html>

<?php

    }

    ?>

