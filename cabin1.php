<?php

class cabin {

    public function cabreg($query) {
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
        $query = "select * from cabin";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

        public function edit($id) {
        $db = new Db();
        $query = "select * from cabin where id = '$id'";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

    public function editCabin($query) {
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
        $query = "select * from cabin where id = '$id'";
        $result = $db->select($query);
        return $result;
    }

    public function deleteCabin($query) {
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
        $query = "select * from cabin where name like'" . $keyword . "%' ";
        $result = $db->select($query);
        // var_dump($result);die;
        return $result;
    }

}
