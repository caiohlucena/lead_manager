<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $nome = $row['usuario'];
        echo "<option value='$id'>$nome</option>";
    }
}
