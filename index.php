<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <header class="bg-dark text-white text-center p-3">
        <h1>Lista Dischi</h1>
    </header>

    <main class="container my-5">
        <div id="app" class="row row-cols-1 row-cols-md-3 g-4">
            <div v-for="disc in discs" :key="disc.title" class="col">
                <div class="card h-100">
                    <img :src="disc.poster" class="card-img-top" :alt="disc.title">
                    <div class="card-body">
                        <h5 class="card-title">{{ disc.title }}</h5>
                        <p class="card-text">{{ disc.author }}</p>
                        <p class="card-text">{{ disc.genre }} - {{ disc.year }}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="script.js"></script>
</html>