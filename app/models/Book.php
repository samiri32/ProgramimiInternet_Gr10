<?php
class Book {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllBooks() {
        $this->db->query('SELECT * FROM books ORDER BY titulli ASC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addBook($data) {
        $this->db->query('INSERT INTO books (user_id, titulli, autori, vleresimi, zhanri, caption, gjuha, datapub, link, img) VALUES (:user_id, :titulli, :autori, :vleresimi, :zhanri, :caption, :gjuha, :datapub, :link, :img)');
      
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':datapub',$data['datapub']);
        $this->db->bind(':gjuha',$data['gjuha']);
        $this->db->bind(':vleresimi',$data['vleresimi']);
        $this->db->bind(':link',$data['link']);
        $this->db->bind(':caption',$data['caption']);
        $this->db->bind(':img',$data['img']);
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
        $this->db->query('SELECT * FROM books WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function changeBook($data) {
        $this->db->query('UPDATE books SET titulli = :titulli, autori = :autori, vleresimi = :vleresimi, zhanri = :zhanri, caption = :caption, gjuha = :gjuha, datapub = :datapub, link = :link, img = :img WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':datapub',$data['datapub']);
        $this->db->bind(':gjuha',$data['gjuha']);
        $this->db->bind(':vleresimi',$data['vleresimi']);
        $this->db->bind(':link',$data['link']);
        $this->db->bind(':caption',$data['caption']);
        $this->db->bind(':img',$data['img']);
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
        $this->db->query('DELETE FROM books WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}