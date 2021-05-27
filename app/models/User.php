<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function regjistrohu($data) {
        $this->db->query("INSERT INTO users (emri, mbiemri, email, password, telefoni, adresa) VALUES(:emri, :mbiemri, :email, :password, :telefoni, :adresa)");
        //Bind values
        $this->db->bind(':emri', $data['emri']);
        $this->db->bind(':mbiemri', $data['mbiemri']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':telefoni', $data['telefoni']);
        $this->db->bind(':adresa', $data['adresa']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function kycu($email, $password) {
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        $hashedPassword = $row->password;
   
        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email)
  {
    $this->db->query('SELECT * FROM users WHERE email = :email');
    
    $this->db->bind(':email', $email);

    // CHECK ROW
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
}