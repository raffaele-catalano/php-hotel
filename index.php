<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Quaint, Inviting, Charming',
            'parking' => true,
            'vote' => 3,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Majestic, Historic, Sophisticated',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Rustic, Scenic, Serene',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 2.4
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Elegant, Luxurious, Upscale',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Modern, Stylish, Trendy',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
        [
            'name' => 'Hotel Ognissanti',
            'description' => 'Beachfront, Tropical, Relaxing',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 1.5
        ],

    ];

    $filteredHotels = $hotels;
    $filter = $_POST['hotels_filter'] ?? null;

    if(isset($_POST['hotels_filter'])) {
        $filteredHotels = [];
    }

    if ($filter === "all") {
        $filteredHotels = $hotels;
    }

    if ($filter === "w_parking") {
        $filteredHotels = [];
        foreach($hotels as $hotel) {
            if ($hotel["parking"]) $filteredHotels[] = $hotel;
        }
    }


    //console log
    // var_dump($_POST)
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
    <!-- font-awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css' integrity='sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==' crossorigin='anonymous'/>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hotels</title>
</head>

<body>
    <div class="wrapper d-flex justify-content-center align-items-center">

        <div class="container p-4">

            <h1 class="text-center fw-bold mb-3"><i class="fa-solid fa-hotel" style="color: #FFC107;"></i> Hotels.bool</h1>

            <form action="index.php" method="POST" class="d-flex mb-2">
                <select class="form-select" name="hotels_filter" id="hotels" aria-label="hotels">
                    <option selected disabled="disabled">Filter</option>
                    <option value="all">All Hotels</option>
                    <option value="w_parking">Hotels with Parking</option>
                </select>
                <button type="submit" class="btn btn-warning ms-2">Submit</button>
            </form>
<!-- ################################################################################################ -->
            <table class="table">
                <thead>
                    <tr>
                        <?php foreach ($filteredHotels[0] as $key => $value ) : ?>
                            <th scope="col" class="text-light fw-bold text-uppercase">
                                <?php
                                if ($key === 'distance_to_center') {
                                    $key = 'Distance to Center';
                                }
                                echo "$key";
                                ?>
                                </th>
                        <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($filteredHotels as $hotel ) : ?>
                            <tr>
                                <?php foreach ($hotel as $key => $value) : ?>
                                    <td scope="col" class="text-light">
                                        <?php
                                        if ($key === 'parking') {
                                            $value ? $value = 'Available' : $value ='Not Available'; 
                                        }
                                        if ($key === 'vote') {
                                            $value = $value . ' ' . '<i class="fa-solid fa-star" style="color: #FFC107;"></i>';
                                        }
                                        if ($key === 'distance_to_center') {
                                            $value = $value . ' ' . 'km';
                                        }
                                        echo "$value";
                                        ?>
                                        </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
<!-- ################################################################################################ -->
        </div>
    </div>
</body>

</html>