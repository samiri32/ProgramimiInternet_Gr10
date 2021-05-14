<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function regjistrohu($data) {
        $this->db->query("INSERT INTO users (emri, mbiemri, username, email, password, gjinia, telefoni, adresa, kategoria) VALUES(:emri, :mbiemri, :username, :email, :password, :gjinia, :telefoni, :adresa, :kategoria)");

        //Bind values
        $this->db->bind(':emri', $data['emri']);
        $this->db->bind(':mbiemri', $data['mbiemri']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':gjinia', $data['gjinia']);
        $this->db->bind(':telefoni', $data['telefoni']);
        $this->db->bind(':adresa', $data['adresa']);
        $this->db->bind(':kategoria', $data['kategoria']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password) {
        $this->db->query('SELECT * FROM users WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}