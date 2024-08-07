<?php
try {
    $con = new PDO('mysql:host=localhost;dbname=phpcrudpdo', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Database Connection Error: ' . $e->getMessage();
}