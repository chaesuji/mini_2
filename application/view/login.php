<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/sign.css">
    <title>Login</title>
</head>
<body>
<?php include_once("application/view/nav.php"); ?>
    <form action="/user/login" method="post">
        <h1>Login</h1>
        <h3 style="color: red;"><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></h3>
        <br>
        <label for="id">ID</label>
        <input type="text" name="id" id="id" class="loginid" placeholder="아이디를 입력하세요" required>
        <br>
        <label for="pw">PASSWORD</label>
        <input type="password" name="pw" id="pw" class="loginpw" placeholder="비밀번호를 입력하세요" required>
        <br><br>
        <button type="submit">Login</button>
        <a class="signup" class="signup" onclick="location.href = '/user/signup'">회원가입</a>
    </form>
</body>
</html>