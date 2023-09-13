<?php




























//hoofdstuk 7 forms opdrachten demo
if (isset($_POST['submit'])) {
    echo "het formulieris verzonden";
    echo "<br>";
//    echo "name: " . $_POST['name'];
//    echo "<br>";
//    echo "email: " . $_POST['email'];
//    echo "<br>";
    if (!empty($_POST['name']) && !empty($_POST['email'])) {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if (!$email) {
            echo "u heeft geen geldig email adres ingevuld";
        } else {
            echo "name: " . $name . "<br>";
            echo "name: " . $email . "<br>";
        }
    } else {
        echo "niet alles is ingevuld";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="name" id="name">
    <br>
    <label for="email">email</label>
    <br>
    <input type="text" name="email" id="email">
    <br>
    <button name="submit">submit</button>
</form>
</body>
</html>
