<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="/application/view/css/nav.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
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
                        <li>
                            <a class="dropdown-item" href="#" onclick="location.href = '/nav/tour_k'">국내</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" onclick="location.href = '/nav/tour_g'">해외</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" href="#" onclick="location.href = '/nav/board'">게시판</a>
                </li>
            </ul>
            <a class="logout nav-link" href="#" onclick="location.href = '/user/mypage'">마이페이지</a>
            <a class="logout nav-link" href="#" onclick="location.href = '/user/logout'">로그아웃</a>
        </div>
    </div>
</nav>
<script src="https://kit.fontawesome.com/8c69259d3d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>