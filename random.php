<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T9-DWES</title>
    <style>
        @import url("estilos.css");
    </style>
</head>
<body>
    <h1>Generacion de usuarios aleatorios</h1>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="get">
        <input type="submit" value="Generar"></button>
    </form>

    <div class="persona">
        <?php
            $url="https://randomuser.me/api/";
            $infoPersona = file_get_contents($url);
            $infoPersona = json_decode($infoPersona);
            
        ?>
        <ul>
            <?php foreach($infoPersona as $iP): ?>
                <li><div class="portrait"><img src="<?php echo $iP[0]->picture->large;?>" alt="Portrait of user"></div></li>
                <div class="details">
                    <li>
                        Name: <?php echo $iP[0]->name->title . 
                            " " . $iP[0]->name->first . 
                            " " . $iP[0]->name->last ; ?>
                    </li>
                    <li>
                        Gender: <?php echo $iP[0]->gender; ?>
                    </li>
                    <li>
                        Address: <?php echo $iP[0]->location->street->name . " " . 
                                    $iP[0]->location->street->number . ", " .
                                    $iP[0]->location->city . ", " .
                                    $iP[0]->location->state . ", " .
                                    $iP[0]->location->postcode . ", " .
                                    $iP[0]->location->country ?>
                    </li>
                    <li>
                        Email: <?php echo $iP[0]->email; ?>
                    </li>
                    <li>
                        Telephone: <?php echo $iP[0]->phone; ?>
                    </li>
                </div>
        <?php
            endforeach;    
        ?>
        </ul>
    </div>
    <hr>
    <div>
        <p>Realizado por Thomas Megain Lee X4435456K</p>
    </div>
</body>
</html>