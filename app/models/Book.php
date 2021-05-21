<?php
class Post {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllBooks() {
        $this->db->query('SELECT * FROM books ORDER BY titulli DESC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addBooks($data) {
        $this->db->query('INSERT INTO books (user_id, ISBN, titulli, autori, vleresimi, zhanri, caption, gjuha, datapub, link, img) VALUES (:user_id, :ISBN, :titulli, :autori, :vleresimi, :zhanri, :caption, :gjuha, :datapub, :link, :img)');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':datapub',$data['datapub']);
        $this->db->bind(':gjuha',$data['gjuha']);
        $this->db->bind(':vleresimi',$data['vleresimi']);
        $this->db->bind(':link',$data['link']);
        $this->db->bind(':caption',$data['caption']);
        $this->db->bind(':img',$data['img']);
        $this->db->bind(':ISBN', $data['ISBN']);
        $this->db->bind(':titulli', $data['titulli']);
        $this->db->bind(':autori', $data['autori']);
        $this->db->bind(':zhanri', $data['zhanri']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findBookById($id) {
        $this->db->query('SELECT * FROM books WHERE ISBN = :ISBN');

        $this->db->bind(':ISBN', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updateBook($data) {
        $this->db->query('UPDATE books SET ISBN = :ISBN, titulli = :titulli, autori = :autori, vleresimi = :vleresimi, zhanri = :zhanri, caption = :caption, gjuha = :gjuha, datapub = :datapub, link = :link, img = :img');

        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':datapub',$data['datapub']);
        $this->db->bind(':gjuha',$data['gjuha']);
        $this->db->bind(':vleresimi',$data['vleresimi']);
        $this->db->bind(':link',$data['link']);
        $this->db->bind(':caption',$data['caption']);
        $this->db->bind(':img',$data['img']);
        $this->db->bind(':ISBN', $data['ISBN']);
        $this->db->bind(':titulli', $data['titulli']);
        $this->db->bind(':autori', $data['autori']);
        $this->db->bind(':zhanri', $data['zhanri']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteBook($id) {
        $this->db->query('DELETE FROM books WHERE ISBN = :ISBN');

        $this->db->bind(':ISBN', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}