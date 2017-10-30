
<?php
if (!isset($_SESSION['username'])) {
    header('location:index.php?action=adminlogin');
}
?>
<?php
$user = new User();
$userlists = $user->lists();

?>

<?php 
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
} 
?>


<h2>List of Users Registered</h2>
<div class="container">
    <div class="row">
        <div class="col-sm-7 col-sm-offset-2 form-box">
            <table class="table">
                <tr style="background-color:grey;">
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>

                    <th>Delete</th>
                </tr>
                <?php foreach ($userlists as $user): ?>
                <tr>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                  <td>
                    <div class="btn-group btn-small">
                        <a href="?action=deleteuser&id=<?php echo $user['id']; ?>">
                            <button class="btn btn-primary" type="submit">Delete</button></a>
                        </div>
                    </td> 
                <?php endforeach; ?>
            </tr>
        </table>
    </div>
</div>
</div>

<?php
unset($_SESSION['success']);
?>