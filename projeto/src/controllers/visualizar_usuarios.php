<?php
include '../../config/conexao.php';

$sql = "SELECT id, usuario FROM usuarios";
$result = $conn->query($sql);
?>
