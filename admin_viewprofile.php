
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

<?php 
if (isset($_SESSION['success'])) {
  echo $_SESSION['success'];
} 
?>      

<h3>Profile</h3> 
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <div class="table-responsive">
      <table class="table"  style="border-radius: 10px;border: 3px solid #337AB7;">
        <tr>
          <td>Name : <td><?php echo $adetail[0]['name'];?></td></td>
        </tr>
        <tr>
          <td>Username : <td><?php echo $adetail[0]['username'];?></td></td>
        </tr>
        <tr>
          <td>Email : <td><?php echo $adetail[0]['email'];?></td>
        </tr>
      </table>
      <a href="index.php?action=admin_editprofile">
        <button class="btn btn-primary" >Edit Profile</button></a>
      </div>
    </div>
  </div>


  <?php
  unset($_SESSION['success']);
  ?>