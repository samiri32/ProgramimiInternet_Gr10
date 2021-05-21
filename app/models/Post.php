<?php
class Post {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getPosts(){
        $this->db->query('SELECT *,
                          posts.id as postId,
                          users.user_id as userId,
                          posts.created_at as postCreated,
                          users.user_datejoined as userCreated
                          FROM posts
                          INNER JOIN users
                          ON posts.user_id = users.id
                          ORDER BY posts.created_at DESC
                          ');
  
        $results = $this->db->resultSet();
  
        return $results;
      }
  

    public function findAllPosts() {
        $this->db->query('SELECT * FROM posts ORDER BY created_at DESC');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addPost($data) {
        $this->db->query('INSERT INTO posts (user_id, title, body, image) VALUES (:user_id, :title, :body, :image)');

        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':image', $data['image']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findPostById($id) {
        $this->db->query('SELECT * FROM posts WHERE id = :id');

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function updatePost($data) {
        $this->db->query('UPDATE posts SET title = :title,  image = :image, body = :body WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':image', $data['image']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePost($id) {
        $this->db->query('DELETE FROM posts WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getTitlePosts($title)
    {
      $this->db->query('SELECT * FROM posts WHERE REPLACE(title," ","") like :title');
      $this->db->bind(':title','%'.$title.'%');
      $results=$this->db->resultSet();
      return $results;

    }
}