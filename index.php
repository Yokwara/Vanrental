<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minimal Dropdown Menu </title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <header>
        <div class="nav">
            <ul>
                <li class="home"><a href="Home.html">Home</a></li>
                <li class="Price"><a href="price.html">Price</a></li>
                <li class="Reserve"><a href="#">Reserve</a></li>
            </ul>
        </div>
    </header>
</body>
</html>




<body>
<div class="container">
  <form method="POST">
    <div class="form-group">
      <label for="Rent_number">Rent number</label>
      <input type="number" required min="1111111" max="9999999" size="7" class="form-control" id="Rent_number" placeholder="Enter number of rent" name="number">
    </div>
    <div class="form-group">
      <label for="Customer_name">Customer name</label>
      <input type="text" required maxlength="20" class="form-control" id="Customer_name" placeholder="Enter Customer name" name="Customer_name">
    </div>
    <div class="form-group">
      <label for="Customer_number">Customer phone number</label>
      <input type="number" required min="1111111" max="9999999" size="7" class="form-control" id="Customer_number" placeholder="Enter number" name="number">
    </div>
    <div class="form-group">
      <label for="Van_pricerate">Price rate </label>
     <input type="text" required maxlength="20" class="form-control" id="Van_pricerate" placeholder="Enter Price rate" name="Van_pricerate">
    </div>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "yok2552";
$dbname = "vanrental";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("conncetion failed: " . $conn->connnect_error);
}
echo "Connected Successfully <hr> <br>";
print_r($_POST);
if (isset($_POST['rent'])) {
   $Rent_number = $_POST['Rent_number'];
   $Customer_name = $_POST['Customer_name'];
   $Customer_number = $_POST['Customer_number'];
   $Van_pricerate = $_POST['Van_pricerate'];
   $sql = "insert into vanrental (Rent_number,Customer_name,Customer_number,Van_pricerate) values (?,?,?,?)";
   // prepare statement
   $sta = mysqli_prepare($conn, $sql);
   echo $conn->errno;
   mysqli_stmt_bind_param($sta, 'iss', $Rent_number, $Customer_name, $Customer_number,$Van_pricerate);
   echo $conn->errno;
   $sta->execute();
echo $conn->errno;
echo $sta;
}
mysqli_close($conn);
?>

 </body>
 </html>