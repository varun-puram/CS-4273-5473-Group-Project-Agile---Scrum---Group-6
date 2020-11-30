<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #fe5c00;
  color: white;
}

.profileDetails {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding-left: 50px;
  padding-right: 50px;
  padding-top: 3px;
  padding-bottom: 28px;
}


</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="home.html">Home</a>
</div>

<div class="profileDetails">
<!--Receiving Username-->
<h3>Username is <?php echo $_POST["username"]; ?></h4></br>

<!--//Receiving Street-->
<h3>Street: <?php echo $_POST["street"]; ?></h3>

<!--//Receiving City-->
<h3>City: <?php echo $_POST["city"]; ?></h3>

<!--//Receiving State-->
<h3>State: <?php echo $_POST["state"]; ?></h3>

<!--//Receiving Zip Code-->
<h3>Zip Code: <?php echo $_POST["zipcode"]; ?></h3>
</div>
</body>
</html>
