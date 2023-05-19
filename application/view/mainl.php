<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/application/view/css/main.css">
    <title>Trip</title>
</head>
<body>
<?php include_once("application/view/nav.php"); ?>

<!-- 캐러셀 -->
<div class="carousel_bg">
    <img src="/application/view/img/logo.gif" alt=".." class="logo">
    <div id="carouselExampleCaptions" class="carousel slide" style="width:100vw ;max-width:1000px;" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" id="car_1" style="max-width:1000px; height:100%; background-color:blueviolet;">
                <img src="https://blog.allstay.com/wp-content/uploads/2019/02/12.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Mont-Saint-Michel and its Bay</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" id="car_2" style="max-width:1000px; height:100%; background-color:azure;">
                <img src="https://blog.allstay.com/wp-content/uploads/2019/02/4-1024x575.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Taj Mahal</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" id="car_3" style="max-width:1000px; height:100%; background-color:blue;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/001_Chateau_de_Chillon_and_Dents_du_Midi_Photo_by_Giles_Laurent.jpg/1200px-001_Chateau_de_Chillon_and_Dents_du_Midi_Photo_by_Giles_Laurent.jpg" class="d-block w-100" style="height:528px;">
                <div class="carousel-caption d-md-block">
                    <h5>Neuschwanstein Castle</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="good">
        <p class="disney_title">
            추천
        </p>
        <br>
        <strong>
            디즈니 영화 배경지로
            <br>
            등장한 실제 장소
        </strong>
        <br><br>
        <a href="#qwer" class="detail">자세히 보기</a>
    </div>
</div>
<div>
    
</div>
<div class="container" id="qwer">
    <hr>
    <div class="row row-xxl-4 row-cols-lg-3">
        <div class="col d-flex justify-content-center mt-2 mb-1">
            <div class="card" style="width: 18rem; padding:0px;">
                <img src="https://blog.allstay.com/wp-content/uploads/2019/02/11.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mont-Saint-Michel</h5>
                    <p class="card-text">jjang</p>
                    <!-- <a href="#" class="btn btn-warning">Buy</a> -->
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center mt-2 mb-1">
            <div class="card" style="width: 18rem;">
                <img src="https://blog.allstay.com/wp-content/uploads/2019/02/3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Taj Mahal</h5>
                    <p class="card-text">jjang</p>
                    <!-- <a href="#" class="btn btn-warning">Buy</a> -->
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center mt-2 mb-1">
            <div class="card" style="width: 18rem;">
                <img src="https://blog.allstay.com/wp-content/uploads/2019/02/6-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Neuschwanstein Castle</h5>
                    <p class="card-text">jjang</p>
                    <!-- <a href="#" class="btn btn-warning">Buy</a> -->
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center mt-2 mb-1">
            <div class="card" style="width: 18rem;">
                <img src="https://blog.allstay.com/wp-content/uploads/2019/02/1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Colmar, France</h5>
                    <p class="card-text">jjang</p>
                    <!-- <a href="#" class="btn btn-warning">Buy</a> -->
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center mt-2 mb-1">
            <div class="card" style="width: 18rem;">
                <img src="https://blog.allstay.com/wp-content/uploads/2019/02/8-1024x576.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Segovia Castle, Spain</h5>
                    <p class="card-text">jjang</p>
                    <!-- <a href="#" class="btn btn-warning">Buy</a> -->
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center mt-3 mb-1">
            <div class="card" style="width: 18rem;">
                <img src="https://blog.allstay.com/wp-content/uploads/2019/02/14.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lofoten, Norway</h5>
                    <p class="card-text">jjang</p>
                    <!-- <a href="#" class="btn btn-warning">Buy</a> -->
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<div>
    
</div>
<script src="/application/view/script/mainl.js"></script>
<script src="https://kit.fontawesome.com/8c69259d3d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>