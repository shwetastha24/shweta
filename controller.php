
<?php

if (!isset($_SESSION['username'])) {
    header('location:index.php?action=adminlogin');
}
?>


<?php

if ($_POST) {

    if (isset($_POST['login'])) {
        if (isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "select * from admin where username= '$username'and password = '$password' ";
            $user = new User();
            $result = $user->login($sql);

            if (!empty($result)) {
                $_SESSION["username"] = $result[0]['username'];
                $_SESSION["id"] = $result[0]['id'];
                header('Location:index.php?action=home');
                echo "login success";
            } else {

                $_SESSION['success'] = "Incorrect username and password. Try again";
                header('location:index.php?action=adminlogin');
            }
        } 
        else {
            $_SESSION['success'] = "Incorrect Capcha. Try again";
            header('location:index.php?action=adminlogin');
        }
    }
    if (isset($_POST['update'])) {

        $id = $_GET['id'];
        $user = new User();
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        
        
        $sql = "update admin set name='$name', username='$username', password='$password', email='$email'  where id='$id'";
        $result = $user->editadminUser($sql);
        if ($result) {
            $_SESSION['success'] = "Updated successfully";
            header('Location: ?action=admin_viewprofile');
        }
    }

    if (isset($_POST['delete'])) {

        $id = $_GET['id'];
        $user = new User(); 
        $name     = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email    = $_POST['email'];
        $gender   = $_POST['gender'];
        $address    = $_POST['address'];
        $phone    = $_POST['phone'];

        $sql = "delete from register where id='$id'";

        $result = $user->deleteUser($sql);

        if ($result) {
            $_SESSION['success'] = "Successfully deleted";
            header('Location: ?action=userlist');
        }
    }
    

        //move_uploaded_file($tmp_name, "../uploads/cabinphotos/$imgname");

        $sql = "insert into cabin (name, capacity, bedtype, price, image, features) values('$name','$capacity','$bedtype','$price','$imgname','$features')";

        $programs = new Program();
        $result = $programs->register($sql);
        
        if ($result) {
            $_SESSION['success'] = "Information successfully saved.";
            header('location:?action=admin_cabin');
        } else {
            echo "Sorry details not saved, try again.";
        }
    }  
    if (isset($_POST['login'])) {
        if (isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "select * from admin where username= '$username'and password = '$password' ";
            $user = new User();
            $result = $user->login($sql);

            if (!empty($result)) {
                $_SESSION["username"] = $result[0]['username'];
                $_SESSION["id"] = $result[0]['id'];
                header('Location:index.php?action=home');
                echo "Login Success";
            } else {

                $_SESSION['success'] = "Incorrect username and password. Try again";
                header('location:index.php?action=adminlogin');
            }
        } 
        else {
            $_SESSION['success'] = "Incorrect Capcha. Try again";
            header('location:index.php?action=adminlogin');
        }
    }
    if (isset($_POST['update'])) {

        $id = $_GET['id'];
        $user = new User();
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        
        
        $sql = "update admin set name='$name', username='$username', password='$password', email='$email'  where id='$id'";
        $result = $user->editUser($sql);
        if ($result) {
            $_SESSION['success'] = "Admin details updated successfully";
            header('Location: ?action=admin_viewprofile');
        }
    }
   
?>