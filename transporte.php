<?php


$cookie_name = "budget";

if(isset($_COOKIE[$cookie_name])){
    setcookie($cookie_name, "", time() - 3600); 
}

$cookie_value = $_POST["budget"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>nonstap</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<header class="header">
<img src="MOSK-01.svg" alt="Logo Nonstap">
</header>
<body> 
    <div class="centra">
        <h2>Tell us your budget</h2>
        <form class="caja" action="actividades.php" method="post">
            <input id="walking" name="transport" type="radio" value="walking"><label for="walking"> Walking</label><br>
            <input id="carmoto" name="transport" type="radio" value="carmoto"><label for="carmoto"> Car or motorcycle</label><br>
            <input id="bike" name="transport" type="radio" value="bike"><label for="bike"> Bike</label><br>
            <input id="ptransport" name="transport" type="radio" value="ptransport"><label for="ptransport"> Public transport</label><br><br>
            <input class="button" type="submit" value="Next">
        </form>
    </div>
</body>
</html>