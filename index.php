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
                <li class="Reserve"><a href="reserve.html">Reserve</a></li>
            </ul>
        </div>
    </header>
</body>
</html>


<div class="jumbotron text-center">
  <h1>Welcome to Vanrental company</h1>
  <p>This is our reserve application!</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>About us</h3>
      <p>1. This company is about a Van rental in Bangkok that customer can rent for a trip by trip. For an example is Pattaya trip is 3 days 2 night. We will follow by both of driver and van going to a trip with your crew until the end of trip and a price is follows by a price of car petrol per day (1 full capacity engine around 1500 baht) and a van price.</p>
    </div>
    <div class="col-sm-4">
      <h3>about us</h3>
      <p>2. The trip that customer plan and reserve in this application.</p>
    </div> 
    <div class="col-sm-4">
      <h3>VAN PRICE RATE</h3>
      <p>Welcome to Van rental!

        <p> This is our promotion!!&hellip;
        
        
        <p>  Van          >>   1800 baht   for     15     peoples        
        <p>  Van / NGV    >>   1500 baht   for     12     peoples    
        <p>  Van / LPG    >>   1500 baht   for     12     peoples
            </p>
 
    </div>
  </div>
</div>
<body>

  <div class="container">
    <form method="POST">
     
      <div class="form-group">
        <label for="Customer_name">Customer name</label>
        <input type="text" required maxlength="20" class="form-control" id="Customer_name" placeholder="Enter Customer name" name="Customer_name">
      </div>
      <div class="form-group">
        <label for="Customer_number">Customer phone number</label>
        <input type="number" required min="0800000000" max="0999999999" size="7" class="form-control" id="Customer_number" placeholder="Enter number" name="number">
      </div>
      <div class="form-group">
        <label for="Van_pricerate">Price rate </label>
       <input type="text" required maxlength="20" class="form-control" id="Van_pricerate" placeholder="Enter Price rate" name="Van_pricerate">
      </div>
      <div class="form-group">
        <label for="Trip">How many days you want to rent. </label>
        <input type="number" required min="1" max="10" size="7" class="form-control" id="Customer_number" placeholder="Enter number" name="number">
      </div>
  
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>



 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vanrental";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
    die("conncetion failed: " . $conn->connnect_error);
}
echo "Connected Successfully <hr> <br>";
print_r($_POST);
if (isset($_POST['Customer_name'])) {
   $Customer_name = $_POST['Customer_name'];
   $Customer_number = $_POST['Customer_number'];
   $van_pricerate = $_POST['van_pricerate'];
   $day_of_trip = $_POST['day_of_trip'];
   $sql = "insert into reserve (Customer_name, Customer_number, van_pricerate, day_of_trip) values (?,?,?,?)";
   // prepare statement
   $sta = mysqli_prepare($conn, $sql);
   echo $conn->errno;
   mysqli_stmt_bind_param($sta, 'iss', $Customer_name, $Customer_number, $van_pricerate, $day_of_trip);
   echo $conn->errno;
   $sta->execute();
echo $conn->errno;
echo $sta;
}
mysqli_close($conn);
?>

 </body>
 </html>

