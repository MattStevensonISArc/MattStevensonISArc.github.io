<!-- HTML -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>jQuery</title>

    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

    <script>
        $(document).ready(function()
        {
            $("#outer-div").each(function()
            {
                console.log($(this).text());
            })
        })
    </script>

</head>

<body>

<div id="outer-div">

    <div id="div1">Div 1</div>

    <div id="div2">Div 2</div>

    <div id="div3">Div 3</div>

</div>

</body>

</html>