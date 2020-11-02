<?php
 require_once 'header.php';
 $error = $user = $pass = "";
 if (isset($_POST['user']))
 {
 $user = sanitizeString($_POST['user']);
 $pass = sanitizeString($_POST['pass']);
 if ($user == "" || $pass == "")
$error = 'Not all fields were entered';
 else
 {
$result = queryMySQL("SELECT user,pass FROM members
WHERE user='$user' AND pass='$pass'");
if ($result->num_rows == 0)
{
$error = "Invalid login attempt";
}
else
{
$_SESSION['user'] = $user;
$_SESSION['logged_in'] = True;
die("You are now logged in. Please 
<a data-transition='slide' href='index.php'>click here</a> to continue.</div>
</body></html>");
}
 }
 }
echo <<<_END
<form method='post' action='login.php'>
<div data-role='fieldcontain'>
<span class='error'>$error</span>
</div>
<div data-role='fieldcontain'>
Please enter your details to log in
</div>
<div class="form-group" data-role='fieldcontain'>
<label>Username</label>
<input type='text' class="form-control"  maxlength='16' name='user' value='$user'>
</div>
<div class="form-group" data-role='fieldcontain'>
<label>Password</label>
<input type='password' class="form-control"  maxlength='16' name='pass' value='$pass'>
</div>

<input data-transition='slide' class="btn btn-primary"  type='submit' value='Login'>
</form>
 </div>
 </body>
</html>
_END;
?>
