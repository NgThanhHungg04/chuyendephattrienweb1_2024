<?php

require_once 'BaseModel.php';

class UserModel extends BaseModel {

    public function findUserById($id) {
        $sql = 'SELECT * FROM users WHERE id = ?';
        $stmt = self::$_connection->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function findUser($keyword) {
        $sql = 'SELECT * FROM users WHERE user_name LIKE ? OR user_email LIKE ?';
        $searchKeyword = '%' . $keyword . '%';
        $stmt = self::$_connection->prepare($sql);
        $stmt->bind_param('ss', $searchKeyword, $searchKeyword);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function auth($userName, $password) {
        $md5Password = md5($password);
        $sql = 'SELECT * FROM users WHERE name = ? AND password = ?';
        $stmt = self::$_connection->prepare($sql);
        $stmt->bind_param('ss', $userName, $md5Password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function deleteUserById($id) {
        $sql = 'DELETE FROM users WHERE id = ?';
        $stmt = self::$_connection->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }

    public function updateUser($input) {
        $sql = 'UPDATE users SET name = ?, password = ? WHERE id = ?';
        $stmt = self::$_connection->prepare($sql);
        $hashedPassword = md5($input['password']);
        $stmt->bind_param('ssi', $input['name'], $hashedPassword, $input['id']);
        return $stmt->execute();
    }

    public function insertUser($input) {
        $sql = 'INSERT INTO users (name, password) VALUES (?, ?)';
        $stmt = self::$_connection->prepare($sql);
        $hashedPassword = md5($input['password']);
        $stmt->bind_param('ss', $input['name'], $hashedPassword);
        return $stmt->execute();
    }

    public function getUsers($params = []) {
        if (!empty($params['keyword'])) {
            $sql = 'SELECT * FROM users WHERE name LIKE ?';
            $searchKeyword = '%' . $params['keyword'] . '%';
            $stmt = self::$_connection->prepare($sql);
            $stmt->bind_param('s', $searchKeyword);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $sql = 'SELECT * FROM users';
            return $this->select($sql);
        }
    }
}
