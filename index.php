<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 3,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
        [
            'name' => 'Hotel Ognissanti',
            'description' => 'Hotel Ognissanti Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 1.5
        ],

    ];
    // console log
    var_dump($hotels);
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/hotels_fav.png" type="png">
    <title>Hotels</title>
</head>

<body>
    <h1>Hotels List</h1>
    <?php foreach ($hotels as $hotel) { ?>
        <ul>
        <?php foreach ($hotel as $key => $value) : ?>
            <li><?php echo "$key: $value" ?></li>
        <?php endforeach; ?>
        </ul>
    <?php }; ?>
</body>

</html>