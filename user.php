<?php

class user {
//for register the user
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
    
    // for login the user in the datbase
    
   public function login($query) {
        $db = new Db();
         $result = $db->select($query);
        return $result;
       // var_dump($result);die;
        
    }
    
     public function lists() {
        $db = new Db();
        $query = "select * from register";
        $result = $db->select($query);
        //var_dump($result);die;
        return $result;
    }
 
    public function update() {
        $db = new Db();
        $query = "select * from register where id='$id'";
        $result = $db->update($query);
        //var_dump($result);die;
        return $result;
    }
    public function edit($id) {
        $db = new Db();
        $query = "select * from register where id = '$id'";
        $result = $db->select($query);
        //var_dump($result);die;
        return $result;
    }
     public function adminlists() {
        $db = new Db();
        $query = "select * from admin where id ='1'";
        $result = $db->select($query);
        //var_dump($result);die;
        return $result;
    }

      public function editadmin($id) {
        $db = new Db();
        $query = "select * from admin where id = '$id'";
        $result = $db->select($query);
        //var_dump($result);die;
        return $result;
    }
    public function editUser($id) {
        $db = new Db();
        $query = "select * from register where id = '$id'";
        $result = $db->select($query);
        //var_dump($result);die;
        return $result;
    }
     public function contactlists() {
        $db = new Db();
        $query = "select * from contact";
        $result = $db->select($query);
        //var_dump($result);die;
        return $result;
    }

     public function editadminUser($query) {
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
        $query = "select * from register where id = '$id'";
        $result = $db->select($query);
        //var_dump($result);die;
        return $result;
    }
     public function deleteUser($query) {
        $db = new Db();

        $result = $db->query($query);

        if ($result === true) {
            return true;
        } else {
            return false;
        }
     }
}
?>