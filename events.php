<?php

class events{

    public function register($query) {
        $db = new Db();
        $result = $db->query($query);
        // var_dump($result);die;
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }

    public function lists() {
        $db = new Db();
        $query = "select * from events";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

    public function edit($id) {
        $db = new Db();
        $query = "select * from events id = '$id'";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

    public function editEvents($query) {
        $db = new Db();
        $result = $db->query($query);
        if ($result === true) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $db = new Db();
        $query = "select * from events where id = '$id'";
        $result = $db->select($query);
        return $result;
    }

    public function deleteEvents($query) {
        $db = new Db();
        $result = $db->query($query);
        if ($result === true) {
            return true;
        } else {
            return false;
        }
    }

    public function search($keyword) {
        $db = new Db();
        $query = "select * from events where name like'" . $keyword . "%' ";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }
}
?>