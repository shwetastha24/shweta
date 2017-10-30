
<?php 
if (isset($_SESSION['success'])) 
{
    echo $_SESSION['success'];
} 
?>
<?php 
include ("includes/adminpanel_cs.php");
?>


<!-- Top content -->

<div class="container">
    <div class="row">
        <div class="col-sm-5 col-sm-offset-4 form-box">
            <div class="form-top">
                <div class="form-top-left">
                    <h3><b>Login to our site</b></h3>
                    <p>Enter your username and password to log on:</p>
                </div>
            </div>
            <div class="form-bottom">
                <form role="form" action="index.php?action=controller" method="post" class="login-form" id="login">
                    <div class="form-group">
                        <label class="sr-only" for="username">Username</label>
                        <input type="username" placeholder="Enter your username" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <input type="password" placeholder="Enter your password" id="password" name="password" required>           
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="captcha">Enter number shown (Verify you are not robot</label>
                        <input name="captcha" type="text">
                        <img src="includes/captcha.php" /><br>
                    </div>
                    <button type="submit" class="btn btn-secondary" name="login" value="login" >Login</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php
unset($_SESSION['success']);
?>