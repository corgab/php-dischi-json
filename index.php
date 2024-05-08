<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .background {
            background-color: rgba(0, 133, 255, 0.55);
            width: 100%;
            height: 100%;
            top: 0;
            right: 0;
        }
    </style>
</head>

<body>
    <div id="app" class="bg-primary-subtle">
        <div class="container page-content">
            <div class="row position-relative">
                <div v-for="(disk, i) in disks" :key="disk" class="text-center col-4 py-3" @click="getIndex(i)">
                    <div>
                        <img :src="disk.poster" class="card-img-top" alt="">
                    </div>
                    <div class="py-3">
                        <h5 class="card-title">{{ disk.title}}</h5>
                        <p>{{ disk.author}}</p>
                        <h6>{{ disk.year }}</h6>
                    </div>
                </div>
                <div :class="currentDisk.selected == true ? 'position-absolute background ' : 'd-none'"
                    class="text-center col-4 py-3">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <img :src="disks[currentDisk.i].poster" class="card-img-top" alt="" style="width: 70%">
                        <div class="py-3 text-white">
                            <h5 class="card-title">{{ disks[currentDisk.i].title }}</h5>
                            <p>{{ disks[currentDisk.i].author}}</p>
                            <h6>{{ disks[currentDisk.i].year }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="./app.js"></script>
</body>

</html>