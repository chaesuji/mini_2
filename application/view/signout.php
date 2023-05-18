<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .noooo{
            position: relative;
            z-index: -1;
            width:100vw;
            opacity: 50%;
        }
        .noout{
            position: absolute;
            bottom:18em;
            left:8em;
            z-index:1;
        }
        .btndiv{
            position: absolute;
            bottom:2em;
        }
    </style>
</head>
<body>
    <form action="/user/d_user" method="post">
        <img src="/application/view/img/nooo.png" class="noooo">
        <span class="noout">대충 붙잡는 말<br>대충 붙잡는 말<br>대충 붙잡는 말<br>대충 붙잡는 말<br>대충 붙잡는 말<br>대충 붙잡는 말</span>
        <div class="btndiv">
            <button type="submit">탈퇴</button>
            <button type="button" onclick="location.href='/user/mypage'">취소</button>
        </div>
    </form>
</body>
</html>