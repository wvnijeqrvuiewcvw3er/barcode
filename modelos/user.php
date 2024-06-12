<?php

require_once "BasedeDatos.php";

class User {
    private $db;

    public function __construct() {
        $this->db = BasedeDatos::Conectar();
    }

    public function authenticate($username, $password) {
        try {
            $stmt = $this->db->prepare("SELECT password FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result && password_verify($password, $result['password'])) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>
