<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="homePage2.css">
  <title>Lost and Found Home Page</title>
</head>


<body background="homePageBackground.jpg" class="background">

<div id="loginAndRegistrationButton">
<a href="account.php">
  <button class="login">Ana-Maria Cirtog</button>
</a>
</div>

<div class="formPopup" id="myForm">
  <form action="login.php" class="formContainer">
    <center><h2>Login</h2></center>

	<span class="error"> <?php echo $_SESSION["nameErr"];?> </span>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

	<span class="error"> <?php echo $_SESSION["emailErr"];?> </span>
    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit" class="popupLogin">Login</button>
  </form>
</div>

<img src="homePageLogo.png" class="logo">

<center>

<div class="buttonContainer">
  <div>
    <button class="buttons lostButton">LOST SOMETHING</button>
	<button class="buttons foundButton">FOUND SOMETHING</button>
  </div>
  <div>
	<button class="locationButton">SEARCH FOR A LOCATION</button>
  </div>
</div>

<br>

<div class="navbar">
  <div class="dropdown">
  <button class="dropbtn" onclick="myFunction(); scrollWin(0, 60)">
    <i id="down arrow"></i>
  </button>
  <div class="dropdownContent" id="myDropdown">
    <p>some stuff here
	<br>blah blah blah
	<br>blah blah blah</p>
  </div>
  </div>
</div>

<center>

<script>
/* When the user clicks on the login button,
toggle between hiding and showing the login form */
function popup()
{
  document.getElementById("myForm").classList.toggle("show");
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function scrollWin(x, y)
{
  window.scrollBy(x, y);
}

function myFunction()
{
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e)
{
  if (!e.target.matches('.dropbtn'))
  {
    if (document.getElementById("myDropdown").classList.contains('show'))
	{
      document.getElementById("myDropdown").classList.remove('show');
    }
  }
}
</script>

</body>
</html>
