<!DOCTYPE html>
<html lang = ja>

<head>
  
  <meta charset = "UFT-8">
  <title>
    mypage
  </title>
  <link rel= "stylesheet" herf="stylesheet.css">
  
</head>


<body>
  
  <form action = "" method = "post" enctype = "multipart/form-date">
    
    //画像の表示はされない
    作品アイコン<input type = "file" name = "pic"><br>    
    作品名<input type = "text" name = "bookname" placeholder = "作品名"><br>
    評価<input type = "number" name = "review" min = "1" max = "5" ><br>
    コメント<input type = "text" name = "comment" placeholder = "コメント"><br>
    読み終えた日<input type = "date" name = "readdate">
    
    <input type = "submit" name = "submit">
   
  </form>
 <?php
  
  $bookname = $_POST["bookname"];
  $review = $_POST["review"];
  $comment = $_POST["comment"];
  $readdate = $_POST["readdate"];
  
  echo $bookname.<br>.$review.<br>.$comment.<br>.$readdate;
  
/*写真ファイルをサーバーにアップロードする。
  if(strlen($_FILES["pic"]["name"])>0)
  {
      $filename = $_FILES["pic"]["name"]
      if(! move_uploaded_file($_FILES["pic"]["tmp_name"],$filename) )
      {
          echo "アップロードに失敗しました。<br>";
      }else{
          echo "name=";
          echo $filename;
          echo "<br>";
          echo "<IMG src='$filename'>";
          echo "<br>";
      }
    }else{
          echo "ファイルをアップロードしてください";
    }
  
  */
  ?>
</body>

</html>
