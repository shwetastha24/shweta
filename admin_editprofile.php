
<?php

if (!isset($_SESSION['username'])) {
  header('location:index.php?action=adminlogin');
}
?>
<?php
$id = $_SESSION['id'];
$user = new User();
$adetail = $user->editadmin($id);
?>

<div class="row">
<div class="col-md-4 col-md-offset-4">
    <h3>Update User Profile :: <?php echo $adetail[0]['username'];?></h3>
    <form id="update" action="index.php?action=controller&id=<?php echo $adetail[0]['id'];?>" method="post">
        <fieldset>
            <div class="control-group">
                <label class="control-label">Name</label>
                <input  class="form-control" name="name" required type="text" value="<?php echo $adetail[0]['name']; ?>">
            </div>
            <div class="control-group">
                <label class="control-label">Username</label>
                <input  class="form-control" name="username" required type="text" value="<?php echo $adetail[0]['username']; ?>">
            </div>
            <div class="control-group">
                <label class="control-label">Password:</label>
                <input class="form-control" name="password" required type="password" value="<?php echo $adetail[0]['password']; ?>">
            </div>      
            <div class="control-group">
                <label class="control-label">Email Address:</label>
                <input class="form-control" required name="email" type="text" value="<?php echo $adetail[0]['email']; ?>" >
                </div>
                <div class="control-group">
                </div></br>
               <button type="submit" class="btn btn-primary btn-lg" name="update" value="update" >Update</button>
            </fieldset>
        </form> 
    </div>
</div>

  <?php
   unset($_SESSION['success']);
   ?>

