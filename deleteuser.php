
<?php
if (!isset($_SESSION['username'])) {
    header('location:index.php?action=adminlogin');
}
?>
<?php
$id = $_GET['id'];
$user = new User();
$udetail = $user->delete($id);
?>


<div class="container">
<div class="row">
    <div class="col-sm-8 col-sm-offset-4 form-box">
        <form id="delete" action="index.php?action=controller&id=<?php echo $udetail[0]['id'];?>" method="post" class="form-horizontal">
            <div class="form-group">
               <div class="col-sm-4">
                   <p>
                    Username:<br>
                    <input  class="form-control" required name="username" type="text" value="<?php echo $udetail[0]['username'];?>" readonly >
                </p>
            </div></div>
            <div class="form-group">
                <div class="col-sm-4">
                 <p>
                    Password:<br>
                    <input class="form-control" name="password" required type="password" value="<?php echo $udetail[0]['password'];?>" readonly>
                </p></div></div>
                <div class="form-group">
                   <div class="col-sm-4">
                    <p>
                       Email:<br>
                       <input  class="form-control" name="email" required type="text" value="<?php echo $udetail[0]['email'];?>" readonly>
                   </p>
               </div>
           </div>
           <div class="form-group col-md-4 text-center">Are you sure you want to delete?
           </div>
           <div class="form-group">
               <div class="col-md-2">
                   <button type="submit" class="btn btn-primary btn-lg" name="delete" value="delete" >Yes</button>
               </div>
               <div class="col-md-2">
                  <a href="index.php?action=userlist" type="submit" class="btn btn-primary btn-lg" >No</a>
               </div>
           </div>
       </form>
   </div>
</div>

