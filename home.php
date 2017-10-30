
<?php 
if(!isset($_SESSION['username']))
{
header ('location:index.php?action=adminlogin');
}
?>

<?php
$id = $_SESSION['id'];
$user = new User();
$adetail = $user->editadmin($id);
?>


<h4>Welcome <?php echo $adetail[0]['username']; ?></h4>
<div class="wrapper">
<p> Manage Website.</p>
<p> Please use the website wisely. </P>
<p> Admin </p>
           <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><img src="../uploads/photo/1.jpg" width="600" height="400" alt=""></li>
                        <li><img src="../uploads/photo/2.jpg" width="600" height="400" alt=""></li>
                        <li><img src="../uploads/photo/3.jpg" width="600" height="400" alt=""></li>
                        <li><img src="../uploads/photo/4.jpg" width="600" height="400" alt=""></li>
                        <li><img src="../uploads/photo/5.jpg" width="600" height="400" alt=""></li>
                    </ul>
                </div>
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                
                <p class="jcarousel-pagination">
                    
                </p>
            </div>
        </div>

<?php
include ("includes/footer.php");
?>