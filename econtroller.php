<?php

if (!isset($_SESSION['username'])) {
    header('location:index.php?action=adminlogin');
}
?>


<?php
$msg = "";

if ($_POST) {
   if (isset($_POST['submitEvents'])) {
        $title = $_POST['title'];
        $date = $_POST['date'];
        $created = $_POST['created'];
        $modified = $_POST['modified'];
        $status = $_POST['status'];
        $sql = "insert into events (title, date, created, modified, status) values('$title','$information','$created', '$modified', '$status')";
        $events = new Events();
        $result = $events->register($sql);
        // var_dump($result);die;
        if ($result) {
            //redirect method
            $_SESSION['success'] = "Events Detail Successfully Saved";
            header('location:?action=admin_eventslist');
        } else {
        $_SESSION['success'] = "Events insertion failed";
        header('location:?action=admin_eventslist');
        }
    } else if (isset($_POST['updateEvents'])) {
        $id = $_GET['id'];
        $events = new Events();
        $title = $_POST['title'];
        $date = $_POST['date'];
        $created = $_POST['created'];
        $modified = $_POST['modified'];
        $status = $_POST['status'];

        $sql = "update events set title='$title', date='$date', created='$created', modified='$modified', status='$status'  where id='$id' ";
        $result = $events->editEvents($sql);
        if ($result) {
            $_SESSION['success'] = "Details Updated successfully";
            header('Location: ?action=admin_eventslist');
        }
    } else if (isset($_POST['deleteEvents'])) {
        $id = $_GET['id'];
        $events = new Events();
        $title = $_POST['title'];
        $$date = $_POST['date'];
        $created = $_POST['created'];
        $modified = $_POST['modified'];
        $status = $_POST['status'];

        $sql = "delete from events where id='$id'";
        $result = $events->deleteEvents($sql);

        if ($result) {
            $_SESSION['success'] = "Information Successfully deleted";
            header('Location: ?action=admin_eventslist');
        }
    }

}
?>
    