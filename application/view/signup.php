<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
    <h1>signup</h1>
    <h3 style="color: red;"><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></h3>
    <form action="/user/signup" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" id="id" required>
        <br>
        <label for="pw">PASSWORD</label>
        <input type="password" name="pw" id="pw" required>
        <br>
        <button type="submit">가입</button>
    </form>
</body>
</html>