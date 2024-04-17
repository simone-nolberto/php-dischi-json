<?php

$string = file_get_contents("dischi.json",);

$discsArray = json_decode($string, true);
// var_dump($discsArray);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booltify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <div class="container" id="app">
        <div class="row">

            <div class="col-4" v-for="disc in discs">
                <div class="card">
                    <img class="card-img-top" :src="disc.poster" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">{{ disc.title}}</h4>
                        <p class="card-text">Autore: {{ disc.author}}</p>
                        <p>Anno: {{ disc.year}}</p>
                        <p>Genere: {{ disc.genre}}</p>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js" integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="app.js"></script>
</body>

</html>