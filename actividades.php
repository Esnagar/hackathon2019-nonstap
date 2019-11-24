<?php


$cookie_name = "transport";


if(isset($_COOKIE[$cookie_name])){
    setcookie($cookie_name, "", time() - 3600); 
}

$cookie_value = $_POST['transport'];
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
        <form class="caja" action="recomendaciones.php" method="post">
            <input id="gastronomy" name="check_list[]" type="checkbox" value="gastronomy"><label for="gastronomy"> Gastronomy</label><br>
            <input id="activity" name="check_list[]" type="checkbox" value="activity"><label for="activity"> Activity and outdoors</label><br>
            <input id="culture" name="check_list[]" type="checkbox" value="culture"><label for="culture"> Culture</label><br>
            <input id="leisure" name="check_list[]" type="checkbox" value="leisure"><label for="leisure"> Leisure</label><br><br>
            <input class="button" type="submit" value="Next">
        </form>
    </div>
</body>
</html>