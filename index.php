<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div v-for="disk in disks" :key="disk" class="text-center col-4" style="width: 18rem;">
                    <div>
                    <img :src="disk.poster" class="card-img-top" alt="">
                    </div>    
                    <div class="py-3">
                        <h5 class="card-title">{{ disk.title}}</h5>
                        <p>{{ disk.author}}</p>
                        <h6>{{ disk.year }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./app.js"></script>
</body>
</html>