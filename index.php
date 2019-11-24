<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>nonstap</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
 
<header class="header">
<img src="MOSK-01.svg" alt="Logo Nonstap" href="index.php">
</header>

<body> 
    <div class="centra">
        <h2>Tell us your budget</h2>
        <form class="caja" action="transporte.php" method="post">
            <input id="nolimit" name="budget" type="radio" value="4"><label for="nolimit"> No limit</label><br>
            <input id="high" name="budget" type="radio" value="3"><label for="high"> High</label><br>
            <input id="medium" name="budget" type="radio" value="2"><label for="medium"> Medium</label><br>
            <input id="low" name="budget" type="radio" value="1"><label for="low"> Low</label><br>
            <input id="free" name="budget" type="radio" value="0"><label for="cheapest"> The cheapest</label><br><br>
            <input class="button" type="submit" value="Next">
        </form>
    </div>
</body>
</html>