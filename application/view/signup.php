<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/sign.css">
    <title>signup</title>
</head>
<body>
    <h1>signup</h1>
    <div>
        <span><?php echo (isset($this->errMsg) ? $this->errMsg : ""); ?></span>
    </div>
    <form action="/user/signup" method="post">
        <label for="name">NAME</label>
        <input type="text" name="name" id="name">
        <span><?php echo (isset($this->arrError["name"]) ? $this->arrError["name"] : ""); ?></span>
        <br>
        <label for="id">ID</label>
        <input type="text" name="id" id="id">
        <button type="button" onclick="chkDuplicationId()" id="chkbtn">중복 체크</button>
        <span id="errMsgId"><?php echo (isset($this->arrError["id"]) ? $this->arrError["id"] : ""); ?></span>
        <br>
        <label for="pw">PASSWORD</label>
        <input type="password" name="pw" id="pw">
        <span><?php echo (isset($this->arrError["pw"]) ? $this->arrError["pw"] : ""); ?></span>
        <br>
        <label for="pwchk">PASSWORD CHECK</label>
        <input type="password" name="pwchk" id="pwchk">
        <span><?php echo (isset($this->arrError["pwchk"]) ? $this->arrError["pwchk"] : ""); ?></span>
        <br>
        <button type="submit">가입</button>
    </form>
    <script src="/application/view/script/signup.js"></script>
</body>
</html>