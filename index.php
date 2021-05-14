<?php 
$words = explode("\n", file_get_contents(dirname(__FILE__). "/text.txt"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Words</title>
</head>
<body>
    <div class="output">
        <h1>
        <?=$words[rand(0,(count($words) - 1))]?>
        </h1>

        <button type="button" onclick="document.location.reload()">Click to Reload</button>
    </div>
</body>
</html>