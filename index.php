<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Гостевая страница</title>
</head>
<body>
    <br><br><h1>Оставьте свой комментарий!</h1><br><br>
    <?php
        $link = mysqli_connect("localhost", "l680592k_table1", "Signeto1111", "l680592k_table1");
        $sql = 'SELECT name, comment FROM visitors';
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $name=$row['name'];
            $comment=$row['comment'];
            print("<div class='container'>
            <p><span>".$name."</span></p>
            <p>".$comment."</p>
            </div>");
        }  
        print( mysqli_connect_error());
         ?>
    <form name="test" method="post" action="input.php">
        <div class='name'>
            <label for="name"><p style="margin-left: 5%;">Ваше имя</p></label>
	<input type="text" id="name" name="name" size="40">
        </div>
        <div class="email">
     <label for="email"><p style="margin-left: 5%;">Ваш email:</label></p>
   	<input type="text" id="email" name="email" size="40">
   	    </div>
        <div class="comment">
            <label for="comment"><p style="margin-left: 2.5%;">Комментарий</p></label>
        <textarea name="comment" id="comment" cols="40" rows="3" style="width:95%; margin-left: 2.5%; resize: none;"></textarea>
  	<input type="submit" value="Отправить" style="margin: 2.5%">
   	<input type="reset" value="Очистить" style="margin: 2.5%">
 </form>
        </div>
</body>
</html>