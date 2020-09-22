<!DOCTYPE html>
<html lang="ja">
 <head>
    <meta charset="utf-8">
    <title>新規登録</title>
 </head>
<body>
<!--ログイン画面の作成-->
    <h2>こちらで新規登録を行ってください</h2>
    <form action=" "method="POST">
        <label for = "username">username</label>
        <input type = "text" name = "username" id = "username"><br>
        <label for= "userID">userID</label>
        <input type = "text" name= "userID" id = "userID"><br>
        <label for = "password">password</label>
        <input type = "text" name = "password" id = "password"><br>
        <input type = "submit" name= "登録"><br>
    </form>
    <?php
//データベース接続
$dsn =  'mysql:dbname=tb*********db;host=localhost';
$user = '*********';
$password = '**********';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        //データテーブルの作成(postで受け取ったものの書き込み)書き込みがからでない場合の処理を行う
        //その処理を行わないと空欄でもそのまま記入されてしまう
        //空でなかったときにデータベースを動かし、記入させる
        $username = $_POST["username"];
        $ID = $_POST["userID"];
        $password = $_POST["password"];
        
        if(!empty($ID) && !empty($password)){
        $sql = $pdo -> prepare("INSERT INTO user (username,userID,password ) VALUES (:username, :userID,:password)");
        $sql -> bindParam(':username', $username, PDO::PARAM_STR);
        $sql -> bindParam(':userID', $ID, PDO::PARAM_STR);
        $sql -> bindParam(':password', $password, PDO::PARAM_STR);
        $sql -> execute();
        }//記入させる終了
        //データベース内に記入したものを表示させる
        //mission4-6ではid=1を抽出させるためにwhereを使用していたが、ここでは抽出は行わないのでwhereは使用しなくてOK
        //またここではbindParamを使う必要はない
        $sql = 'SELECT * FROM user'; //userを用いてユーザー情報を取得したい場合に'SELECT*FORM tbtestで呼び出す
        $stmt = $pdo-> query ($sql);    //query→データベースに対する命令文のこと$sql 内を検索させている？
        $results = $stmt->fetchAll(); 
        foreach ($results as $row){
		echo $row['id'].',';
		echo $row['username'].',';
		echo $row['userID'].',';
		echo $row['password'].'<br>';
		echo "登録できました！";
	echo "<hr>";
	}
        ?>
</body>
</html>