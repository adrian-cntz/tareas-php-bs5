<?php 
    include '../db.php';
    $id_tarea = $_POST['id'];
    $updTarea = " UPDATE tareas SET completa = '1' WHERE id_tarea = $id_tarea ";
    $marcarTarea = mysqli_query($conn, $updTarea);
    header("Location: ../index.php");
    exit();
?>