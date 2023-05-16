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
    // var_dump($hotels);
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/hotels_fav.png" type="png">
    <!-- scss -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hotels</title>
</head>

<body>
    <div class="wrapper d-flex justify-content-center align-items-center">
        <div class="container p-4">
            <h1 class="text-center fw-bold mb-3">Hotels List</h1>
            <table class="table">
                <thead>
                    <tr>
                            <?php foreach ($hotels[0] as $key => $value ) : ?>
                                <th class="text-light fw-bold text-uppercase"><?php echo "$key" ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hotels as $hotel ) : ?>
                        <tr>
                            <?php foreach ($hotel as $value) : ?>
                            <td class="text-light"><?php echo "$value" ?></td>
                            <?php endforeach; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</body>

</html>