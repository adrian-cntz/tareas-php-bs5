<?php 
    include '../db.php';    
    $bTarea = " DELETE FROM tareas WHERE completa = '1' ";
    $borrarTarea = mysqli_query($conn, $bTarea);
    header("Location: ../index.php");
    exit();
?>