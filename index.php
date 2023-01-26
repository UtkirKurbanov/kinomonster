<?php 

    define("DBNAME", "kinomonster");

    $nickname = "Developer2700";

    $balance = 0;
    $addBalance1 = 10;
    $addBalance2 = 35;
    
    $balance = $addBalance1 + $addBalance2;


    $trafficLight = "";

/*    if ($trafficLight == "green") {
        echo "The traffic light is green, I'm crossing the road.";
    } else if ($trafficLight == "yellow") {
        echo "The traffic light is now yellow.";
    }
     else {
        echo "I'll wait for the green light to turn on.";
    } */  

    switch ($trafficLight) {
        case 'green':
            echo "The traffic light is green, I'm crossing the road.";
            break;
        case 'yellow':
            echo "The traffic light is now yellow.";
            break;   
        case 'red':
            echo "I'll wait for the green light to turn on.";
            break;     
        
        default:
            echo "The traffic light is broken, I'll go look for another pedestrian crossing.";
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- <div>Hello, <?php echo $nickname; ?></div> -->

    <?php 
        // echo "<div>".$balance."</div>";
        // echo DBNAME;
    ?>

</body>
</html>

