<!DOCTYPE html>
<html lang = ja>

<head>

<meta charset = "UFT-8">
<title>
mypage
</title>

</head>


<body>
  
  <form action = "" method = "post" enctype = "multipart/form-date">
    
    /*画像の表示はされない*/
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
  
  echo $bookname<br>$review<br>$comment<br>$readdate;
  
  ?>
</body>

</html>
