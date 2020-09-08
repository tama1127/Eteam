<!DOCTYPE html>
<html lang = ja>

<head>

<meta charset = "UFT-8">
<title>
mypage
</title>

</head>


<body>
  
  <form action = "" method = "post">
    
    //写真の挿入
    //<input type = ""    
    作品名<input type = "text" name = "bookname" placeholder = "作品名"><br>
    評価<input type = "number" name = "review" min = "1" max = "5" ><br>
    コメント<input type = "text" name = "comment" placeholder = "コメント"><br>
    読み終えた日<input type = "date">
   
  </form>

  $bookname = $_POST["bookname"];
  $review = $_POST["review"];
  
</body>

</html>
