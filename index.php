

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  include('cnxDB.php');

  if (isset($_POST["sub"])) {
     $nome = $_POST['name'];
     $email = $_POST['email'];

  $stmt = $conn->prepare("INSERT INTO users (nom, email) VALUES (?, ?)");

  $stmt->bind_param("ss", $nome,$email) ;

  $stmt->execute();

  $stmt->close();
  $conn->close();
}
?>
<?php
        include('cnxDB.php');
        $nome = $_GET['nome'];
        $query = "SELECT * FROM `role` WHERE `nome` = '$nome' ";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        // print_r($row);

?>

    <form method="POST" >
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <select name="" id="">
            <option value="">select role</option>
            <option value=""></option>
            <option value=""></option>
        </select>
        <button type="submit" name = "sub" >submit</button>
    </form>
</body>
</html>














