  
<?php

$pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=misc', 'Oude', '120');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);