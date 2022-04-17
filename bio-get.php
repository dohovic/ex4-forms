<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user = $_GET["user"];
        $pass = $_GET["pass"];

        if ($user == "dan dohovic" && $pass == "111")
            echo "<h2>Hi ". $user . "</h2>";
        else
            echo "<h2>error</h2>"
    ?>
</body>
</html>