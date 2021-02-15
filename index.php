<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title>Гостевая страница</title>
</head>
<body>
    <h1>Оставьте свой комментарий!</h1>
    <div class="all">
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
    </div>
    <form name="test" method="post" action="input.php">
        <div class='name'>
            <label style="margin-left: 5%;" for="name">Ваше имя</label>
	<input type="text" id="name" name="name" size="40">
        </div>
        <div class="email">
     <label style="margin-left: 5%;" for="email">Ваш email:</label>
   	<input type="text" id="email" name="email" size="40">
   	    </div>
        <div class="comment">
            <label style="margin-left: 2.5%;" for="comment">Комментарий</label>
        <textarea name="comment" id="comment" cols="40" rows="3" style="width:95%; margin-left: 2.5%; resize: none;"></textarea>
        </div>
  	<input type="submit" value="Отправить" style="margin-left: 2.5%">
   	<input type="reset" value="Очистить" style="margin-left: 2.5%">
 </form>
        </div>
</body>
</html>