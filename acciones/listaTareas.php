<?php 
    include './db.php';
    $listaTareas = " SELECT * FROM tareas WHERE completa = '0' ";
    $arrayTareas = mysqli_query($conn, $listaTareas);

    $listaTareasHechas = " SELECT * FROM tareas WHERE completa = '1' ";
    $arrayTareas2 = mysqli_query($conn, $listaTareasHechas);
?>    