<!DOCTYPE html>
<html>
<head>
    <title>h7 - opdracht 3</title>
    <style>
        .red-bg {
            background-color: red;
        }

        .green-bg {
            background-color: green;
        }

        .blue-bg {
            background-color: blue;
        }

        .pink-bg {
            background-color: pink;
        }
    </style>
</head>
<body>
<form method="post" action="">
    <input type="radio" name="backgroundcolor" value="red"> Rood<br>
    <input type="radio" name="backgroundcolor" value="green"> Groen<br>
    <input type="radio" name="backgroundcolor" value="blue"> Blauw<br>
    <input type="radio" name="backgroundcolor" value="pink"> roze<br><br>
    <input type="submit" name="instellen" value="instellen">
</form>
<?php
if (isset($_POST['instellen'])) {
    $gekozenKleur = $_POST['backgroundcolor'];
    echo '<style>
                body {
                    background-color: ' . $gekozenKleur . ';
                }
            </style>';
}
?>
</body>
</html>
