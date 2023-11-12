<?php

  if (!defined('DB_HOST')) {
        define('DB_HOST', 'bbdd');
    }
    if (!defined('DB_NAME')) {
        define('DB_NAME', 'eventos');
    }
    if (!defined('DB_USER')) {
        define('DB_USER', 'user');
    }
    if (!defined('DB_PASS')) {
        define('DB_PASS', 'root');
    }
    if (!defined('DB_PORT')) {
        define('DB_PORT', 3306);
    }
    if (!defined('DB_CHARSET')) {
        define('DB_CHARSET', 'utf8mb4');
    }
    if (!defined('DB_COLLATE')) {
        define('DB_COLLATE', 'utf8mb4_unicode_ci');
    }


	function db_connect() {
        global $config;
        try {
            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // function db_disconnect($db_conn, $stmt) {
    //     $stmt = null;
    //     $db_conn->close();
	// }

    function db_query_fetchall($sql) {
        $conn = db_connect();

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        //db_disconnect($conn, $stmt);
        return $result;
    }

    function db_query_prepare($sql, $data, $type) {
		$db_conn = db_connect();

		$stmt = $db_conn->prepare($sql);
        //$stmt->bindParam($sql, ...$data, $type);
        $stmt->execute();

		//db_disconnect($db_conn, $stmt);
		return $stmt;
	}
