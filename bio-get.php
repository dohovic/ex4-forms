<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pass = "Wallak357";
        $passCheck = $_GET["passCheck"];
        $user = $_GET["userName"];
        $about = $_GET["about"];
        $hidden = $_GET["hiddenInfo"];
        if (trim($pass) == trim($passCheck)) {
            echo "<h3>Hey ". $user . ", Your info is updated.</h3>";
            echo "<h3>About: </h3><p>". $about ."</p>";
            if ($_POST['hiddenInfo'] == 'hidden')
                echo "<h3>Your about info will be hidden</h3>";
            else
                echo "<h4>Yout about info is public</h4>";
            echo "<span>Update time: " . date("Y/m/d") . "</span>";
        }
        else
            echo "<h3>Can not verify password</h3>";
    ?>
</body>
</html>