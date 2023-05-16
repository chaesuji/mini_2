<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <h3 style="color: red;"><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></h3>
    <form action="/user/login" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" id="id" required>
        <br>
        <label for="pw">PASSWORD</label>
        <input type="password" name="pw" id="pw" required>
        <br>
        <button type="submit">Login</button>
        <a class="signup" onclick="location.href = '/user/signup'">회원가입</a>
        <span class="find_id_pw"><a>아이디</a>, <a>비밀번호</a>찾기</span>
    </form>
</body>
</html>