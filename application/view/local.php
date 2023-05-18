<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/local.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>지역</title>
</head>
<body>
<?php include_once("application/view/nav.php"); ?>
<div class="local_container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="width:100vw;max-width:1000px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://api.cdn.visitjeju.net/photomng/imgpath/202012/16/2ec86865-a3c7-4ba3-8d0e-3ebf3900bc97.jpg" class="d-block w-100" style="height:560px;">
                <h4 class="car1">제주, 스누피가든</h4>
                <span class="carp1">wpwnwpwnwpnwpwpwpwnwpwnwpwnwpwn</span>
            </div>
            <div class="carousel-item">
                <img src="https://mediaim.expedia.com/destination/1/d40539fd4d48e03ce43ea4a5f4bc27b5.jpg" class="d-block w-100" style="height:560px;">
                <h4 class="car2">서울, 북촌 한옥마을</h4>
                <span class="carp2">tjdnftjdnftjdnftjdnftjdnftjdnftjdnf</span>
            </div>
            <div class="carousel-item">
                <img src="https://blog.kakaocdn.net/dn/K3e8Q/btqIz6ck8nH/8MTDTWBXwP9yzMgSOsOyz1/img.jpg" class="d-block w-100" style="height:560px;">
                <h4 class="car3">강릉, 바다열차</h4>
                <span class="carp3">rkdfmdrkdfmdrkdfmdrkdfmdrkdfmdrkdfmd</span>
            </div>
        </div>
    </div>
    <div class="qwe">
        <span class="localspan"></span>
        <hr>
        <button type="button" class="seoulb">서울</button>
        <button type="button" class="busanb">부산</button>
        <button type="button" class="daegub">대구</button>
        <button type="button" class="incheonb">인천</button>
        <button type="button" class="gwangjub">광주</button>
        <button type="button" class="daejeonb">대전</button>
        <button type="button" class="ulsanb">울산</button>
        <button type="button" class="jejub">제주</button>
    </div>
    <div class="grid1">
        <div class="div1">
            <img class="img1">
            <span class="span1"></span>
        </div>
        <div class="div2">
            <span class="span2"></span>
            <img class="img2">
        </div>
        <div class="div3">
            <span class="span3"></span>
            <img class="img3">
        </div>
    <div>
    <hr>
</div>
<script src="/application/view/script/local.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>