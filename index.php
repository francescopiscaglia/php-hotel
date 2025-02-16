<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Hotels</title>
</head>

<body>
    <div class="container">
        <h1 class="my-4">PHP Hotels</h1>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
            <?php
            $hotels = [
                [
                    'name' => 'Hotel Belvedere',
                    'description' => 'Hotel Belvedere Descrizione',
                    'parking' => true,
                    'vote' => 4,
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
            ];

            foreach ($hotels as $hotel) {
            ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $hotel['name']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Voto: <?php echo $hotel['vote']; ?> ⭐</h6>
                            <p class="card-text"><?php echo $hotel['description']; ?></p>
                            <p class="card-text"><strong>Parcheggio:</strong> <?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></p>
                            <p class="card-text"><strong>Distanza dal centro:</strong> <?php echo $hotel['distance_to_center']; ?> km</p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>