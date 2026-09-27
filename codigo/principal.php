<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Funcionou
    <?php
    session_start();
    echo "<p> bem venido $SESSION['email']";
    ?>
</body>
</html>