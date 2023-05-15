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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Trip</a> -->
        <a class="navbar-brand" href="#"><img src="/application/view/img/mang1.png" alt="mang" class="manglogo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">테마</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">지역</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    여행
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">지도</a>
                </li>
            </ul>
            <a class="nav-link" onclick="location.href = '/user/login'">로그인</a>
        </div>
    </div>
</nav>

<!-- 캐러셀 -->
<div class="carousel_bg">
    <img src="/application/view/img/logo.gif" alt=".." class="logo">
    <div id="carouselExampleCaptions" class="carousel slide" style="width:1000px;" data-bs-ride="carousel">
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
                <img src="https://blog.allstay.com/wp-content/uploads/2019/02/3.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Taj Mahal</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" id="car_3" style="max-width:1000px; height:100%; background-color:blue;">
                <img src="https://blog.allstay.com/wp-content/uploads/2019/02/5.png" class="d-block w-100" alt="...">
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
            <br>
            3곳
        </strong>
        <br><br>
        <a href="#" class="detail">자세히 보기</a>
    </div>
</div>
<script src="/application/view/script/main.js"></script>
<script src="https://kit.fontawesome.com/8c69259d3d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>