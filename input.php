<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="0; url=/index.php">
  <title></title>
</head>
<?php
$name=htmlspecialchars($_POST['name']);
//print ("INSERT INTO visitors (nick) VALUES ($nick2)");
$email=htmlspecialchars($_POST['email']); 
$comment=htmlspecialchars($_POST['comment']); 
$link = mysqli_connect("localhost", "l680592k_table1", "Signeto1111", "l680592k_table1");
$sql = "INSERT INTO visitors (name, email, comment, date) VALUES ('$name', '$email','$comment', CURDATE());";
$result = mysqli_query($link, $sql);
if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}
if ($link == false) {
    print("Мы даже не подключились к базе");
}
print( mysqli_connect_error());
?>