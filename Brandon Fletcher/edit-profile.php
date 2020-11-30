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

#editProfile {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="home.html">Home</a>
</div>

<!-- Information for Sending Data: https://www.android-examples.com/send-receive-html-form-data-from-one-page-to-another-using-php/ -->
<!--
<div class="profileDetails">
  <h1>Edit Profile Form</h1>
  <div class="sc-container">
    <input type="text" placeholder="Username" />
    <br>
    <input type="text" placeholder="Street" />
    <br>
    <input type="text" placeholder="State" />
    <br>
    <input type="text" placeholder="Zip Code" />
    <br>
    <input type="file" id="myFile" name="filename">
    <br>
    <input type="submit" value="Submit">
  </div>
</div>

-->

<table class="profileDetails">
<form action="changed-profile.php" method="post">
<tr>
<td> Username: </td><td><input type="text" name="username"></td>
</tr>
<tr>
<td> Street: </td><td><input type="text" name="street"></td>
<tr>
<td> City: </td><td><input type="text" name="city"></td>
</tr>
<tr>
<td> State: </td><td><input type="text" name="state"></td>
</tr>
<tr>
<td> Zip Code: </td><td><input type="text" name="zipcode"></td>
</tr>
<tr>
<td> Profile Picture: </td><td><input type="file" name="profile-picture"></td>
</tr>
<tr>
<td><input type="Submit" value="Submit"></td></tr>

</form>
</table>

</body>
</html>
