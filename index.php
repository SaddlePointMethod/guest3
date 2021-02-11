<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Дворянский</title>
</head>
<body>
    <p>некий текст11</p>
    <?php 
        echo date("d");
        $link = mysqli_connect("localhost", "l680592k_table1", "Signeto1111", "l680592k_table1");
        $sql = 'SELECT name, comment FROM visitors';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $name=$row['name'];
            $comment=$row['comment'];
            print($name);
            print("<br>".$comment. "<br><br>");
        }  
        print( mysqli_connect_error());
         ?>
 <form name="test" method="post" action="input.php">
	<p><b>Ваше имя:</b><br>
	<input type="text" name="name" size="40">
	</p>
	<p>
	<b>Ваш email:</b><br>
   	<input type="text" name="email" size="40">
  	</p>
  	<p>Комментарий<Br>
   	<textarea name="comment" cols="40" rows="3"></textarea></p>
  	<p><input type="submit" value="Отправить">
   	<input type="reset" value="Очистить"></p>
 </form>
</body>
</html>