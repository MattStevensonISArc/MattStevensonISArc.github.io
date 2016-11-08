
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

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <title>javascript4</title>

        </head>

        <body>

        <form method="post" onsubmit="sendForm(this)">
            <label for="title">Title</label><br>
            <input type="text" id="title" name="title"><br>

            <label for="author">Author</label><br>
            <input type="text" id="author" name="author"><br>

            <label for="content">Content</label><br>
            <textArea id="content" name="content"></textArea><br>

            <input type="submit" value="Create Log">
        </form>

        </body>

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


