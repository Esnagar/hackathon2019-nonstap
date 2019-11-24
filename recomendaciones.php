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
      

<?php

$enlace = mysqli_connect('localhost','root','','nonstap');
$sentencia = 'SELECT * FROM places WHERE (price = ';
for($i = 0; $i <= $_COOKIE["budget"]; $i++ ){
    if($i != $_COOKIE["budget"]){
        $sentencia .=  " '{$i}' or price = ";

    } else{
        $sentencia .=  "'{$i}') and " ;
    }
}

if(!empty($_POST['check_list'])) {
    for($i = 0; $i < count($_POST['check_list']); $i ++ ){
        if($i != count($_POST['check_list'])-1){
            $sentencia .= " activity = '{$_POST['check_list'][$i]}'" ;
            $sentencia .= " or";
        }else{
        $sentencia .=  " activity = '{$_POST['check_list'][$i]}' " ;
        }
    }
}

$sentencia .= ' ORDER BY sponsorship DESC, rating DESC, lat ASC, lon DESC';

$resultado = mysqli_query($enlace, $sentencia);


echo '<div class="resultados">';

$var = TRUE;

while ( $fila = mysqli_fetch_assoc( $resultado ) ) {

    $var = FALSE;

    $nombre = $fila['long_name'];
    $rating = $fila['rating'];
    $precio = $fila['price'];
    $activity = $fila['activity'];
    $sponsor = $fila['sponsorship'];
    if($sponsor == 1){
        $sponsor = 'is sponsor';
    }else{
        $sponsor = 'not sponsor';
    }
    $lat = $fila['lat'];
    $lon = $fila['lon'];

    echo "<div class='resultado'>
            <h2>$nombre</h2>
            <footer class='caja'>
                <p><strong>Sponsorship: </strong> $sponsor</p>
                <p><strong>Rating: </strong>$rating</p>
                <p><strong>Price: </strong>$precio</p>
                <p><strong>Activity: </strong>$activity</p>
                <p><strong>Latitud: </strong>$lat</p>
                <p><strong>Longitud: </strong>$lon</p>
            </footer>
        </div>";
}

if($var == 1){

    echo "<div class='resultado'>
    <h2>'Ups!</h2>
    <footer class='caja'>
        <p>Sorry, we could not find anything with those parameters</p>
    </footer>
        </div>";

}

echo "</div>";



?>
   </body>
</html>
