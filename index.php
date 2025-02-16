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

        <!-- Form per il filtro -->
        <form method="GET" class="mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="parking" id="parking" value="1"
                    <?php if (isset($_GET['parking'])) echo 'checked'; ?>>
                <label class="form-check-label" for="parking">
                    Parcheggio
                </label>
            </div>
            <button type="submit" class="btn btn-sm btn-primary mt-2">Filtra</button>
        </form>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3">
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

            if (isset($_GET['parking'])) {
                $hotels = array_filter($hotels, function ($hotel) {
                    return $hotel['parking'] === true;
                });
            };

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
            };
            ?>
        </div>
    </div>
</body>

</html>