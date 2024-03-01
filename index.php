<!DOCTYPE html">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas PHP</title>
    <link rel="stylesheet" href="styles.css" />
    <!-- BS5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- BS5 icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body class="bg-secondary">
    <div class="container-sm mx-auto bg-light p-5 h-100">

        <h1 class="display-4 text-center">Lista de tareas</h1>
        <form action="./acciones/agregarTarea.php" method="post" class="mw-75 text-center mx-auto" style="max-width: 520px;">
            <div class="input-group mb-2">
                <input type="text" class="form-control" name="tarea" required>
                <div class="input-group-text"><i class="bi bi-pencil-square"></i></div>
            </div>
            <div class="mx-auto p2">
                <button type="submit" class="btn btn-primary">Añadir tarea</button>
            </div>
            <?php include './acciones/listaTareas.php'; ?>
        </form>

        <div class="mx-auto" style="max-width: 750px">
            
            <ul class="nav nav-tabs my-4" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link active" onclick="tPendientes()" role="tab"
                        aria-selected="true" data-bs-toggle="tab">Pendientes</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" onclick="tRealizadas()" role="tab"
                        aria-selected="false" data-bs-toggle="tab">Realizadas</a></li>
            </ul>

            <form action="./acciones/marcarTarea.php" method="post" id="pendientes">
                <table class="table">
                    <thead>
                        <th class="table-info">Tarea</th>
                        <th class="text-center table-info">Marcar hecha</th>
                    </thead>
                    <tbody>
                        <?php
                        if ($arrayTareas != null) {
                            foreach ($arrayTareas as $itemTarea) {
                                echo "
                                    <tr>
                                        <td>" . $itemTarea['tarea'] . "</td>
                                            <input type='hidden' value='" . $itemTarea['id_tarea'] . "' name='id'>
                                            <td class='text-center'>                                            
                                            <button type='submit' class='btn btn-outline-success'><i class='bi bi-check2'></i></button>
                                        </td>
                                    </tr>   
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </form>

        </div>
        
        <div id="realizadas" style="display:none; max-width: 900px" class="mx-auto">

            <div class="row text-center">
                <div class="col-6">
                    <form action="./acciones/borrarTareas.php" method="post" id="tRealizadas">
                        <ul class="list-group text-left bg-secondary">
                            <?php
                            if ($arrayTareas2 != null) {
                                foreach ($arrayTareas2 as $itemTarea2) {
                                    echo "<li class='list-group-item list-group-item-secondary'>" . $itemTarea2['tarea'] . "</li>";
                                }
                            } else {
                                echo "<li class='list-group-item'> No hay tareas en esta lista </li>";
                            }
                            ?>
                        </ul>
                    </form>
                </div>
                <div class="col-6">
                    <button type='submit' form="tRealizadas" class='btn btn-danger'>Borrar tareas</button>
                </div>
            </div>
            </div>
            
        </div>
    </div>
    <script>
        let r = document.getElementById("realizadas");
        let p = document.getElementById("pendientes");

        function tRealizadas() {
            if (r.style.display === "none") {
                p.style.display = "none"
                r.style.display = "grid";
            }
        }
        function tPendientes() {
            if (p.style.display === "none") {
                r.style.display = "none";
                p.style.display = "block";
            }
        }
    </script>
</body>

</html>