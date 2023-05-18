<?php 
    $getsession = $_SESSION[_STR_LOGIN_ID];

    $result = $this->mypageinfo($getsession);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/sign.css">
    <title>Document</title>
</head>
<body>
<?php include_once("application/view/nav.php"); ?>
    <form action="/user/mypage" method="post" class="myform">
        <h1>마이페이지</h1>
        <br><br>
        <label for="name">NAME</label>
        <input type="text" name="name" id="name" class="myname" value="<?php echo $result["u_name"] ?>">
        <span><?php echo (isset($this->arrError["name"]) ? $this->arrError["name"] : ""); ?></span>
        <br>
        <label for="id">ID</label>
        <input type="text" name="id" id="id" class="myid" readonly value="<?php echo $result["u_id"] ?>">
        <br>
        <label for="pw">PASSWORD</label>
        <input type="text" name="pw" id="pw" class="mypw" placeholder="비밀번호를 입력하세요">
        <span><?php echo (isset($this->arrError["pw"]) ? $this->arrError["pw"] : ""); ?></span>
        <br>
        <label for="pwchk">PASSWORD CHECK</label>
        <input type="text" name="pwchk" id="pwchk" class="mypwchk" placeholder="비밀번호를 입력하세요">
        <span><?php echo (isset($this->arrError["pwchk"]) ? $this->arrError["pwchk"] : ""); ?></span>
        <input type="hidden" id="hno" name="no" value="<?php echo (int)$result["u_no"] ?>">
        <br><br>
        <button type="submit">수정</button>
        <button type="button" onclick="location.href='/user/d_user'">탈퇴</button>
    </form>
    <script src="/application/view/script/mypage.js"></script>
</body>
</html>