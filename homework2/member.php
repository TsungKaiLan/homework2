<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>加入會員</title>
</head>
<body>
    <div class="container">
        <form method="post" onsubmit="return check();" action="print.php">
            <div class="UserGroup">
                <label for="userName">帳號: </label>
                <input type="text" name="userName" placeholder="請輸入帳號">
            </div>
            <div class="passwordGroup">
                <label for="passWord">密碼: </label>
                <input type="password" name="passWord" placeholder="請輸入密碼">
            </div>
            <div style="display:none" id="wrong" class="wrong">密碼輸入錯誤,必須包含8個以上的英文或數字</div>
            <div class="login_group">
                <input type="submit" class="btn" value="登入">
            </div>
        </form> 
    </div>
    <script>
        function check()
        {
        //如果要8個以上,n個以下就用 , var re = /[\d\w]{8,n}/g;
        var re = /[\d\w]{8,}/g;
        var obj = document.all("passWord");
        var result = re.exec(obj.value);
        if(result == null || result != obj.value)
        {
            document.getElementById("wrong").style.display = "block";
            // alert("密碼輸入錯誤,必須包含8個以上的英文或數字");
            return false;
        }
        return true;
        }
</script>
</body>
</html>