<!DOCTYPE html>

<html>
<head>
    <title>員工登入頁面</title>
    <link rel="stylesheet" href="css/Elogin.css">
</head>
<body>
	<a href="Home.php"><img src="img/home.png" width="80" height="80" style="position:position:absolute;top:15px;left:10px;"></a>

    <div class="cycle">
    	<div class="txt">
        	<h1>員工登入</h1>
	<form method="POST" action="php/Elogin.php">
            <div class="input">
       		<label for="account">帳號：</label>
        		<input type="text" name="account">
	<br>
	</div>
	<div class="input">
        		<label for="password">密碼：</label>
        		<input type="password" name="password">
	<br>
	</div>
	<div class="input">
		<input type="submit" value="登入">
	</div>
	</form>
	</div>
</div>

</body>
</html>