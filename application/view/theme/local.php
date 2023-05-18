<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Trip</a> -->
        <a class="navbar-brand" href="#" onclick="location.href = '/trip/mainl'"><img src="/application/view/img/mang1.png" alt="mang" class="manglogo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="theme nav-link active" aria-current="page" href="#" onclick="location.href = '/nav/theme'">테마</a>
                </li>
                <li class="nav-item">
                    <a class="local nav-link" href="#" onclick="location.href = '/nav/local'">지역</a>
                </li>
                <li class="nav-item dropdown">
                <a class="tour nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    여행
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#" onclick="location.href = '/nav/tour'">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" href="#">지도</a>
                </li>
            </ul>
            <a class="logout nav-link" href="#" onclick="location.href = '/user/logout'">로그아웃</a>
        </div>
    </div>
</nav>

<div>
    <button type="button">서울</button>
    <button type="button">부산</button>
    <button type="button">대구</button>
    <button type="button">인천</button>
    <button type="button">광주</button>
    <button type="button">대전</button>
    <button type="button">울산</button>
    <button type="button">세종</button>
    <button type="button">경기</button>
    <button type="button">강원</button>
    <button type="button">충북</button>
    <button type="button">충남</button>
    <button type="button">전남</button>
    <button type="button">경북</button>
    <button type="button">경남</button>
    <button type="button">제주</button>
</div>
</body>
</html>