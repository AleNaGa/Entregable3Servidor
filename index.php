<?php
include  "scripts/connection.php";
$con = connection();

$sql = "SELECT * FROM alumnos";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">

    <title>Document</title>
</head>
<body>
    <section class="container">
        <!-- tabla de los alumnos-->
    <table class="tablaAlumnos">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
        <?php while($row = mysqli_fetch_array($query)): ?>
            <tr>
                <td><?= $row['nombreAlumnos'] ?></td>
                <td><?= $row['edad'] ?></td>
                <td class="botones">
                    <button>
                        <a href="scripts/delete.php?id=<?= $row['idAlumnos'] ?>">Eliminar</a>
                    </button>
                    <button>
                        <a href="updateForm\updateForm.php?id=<?= $row['idAlumnos'] ?>">Editar</a>
                    </button>
                </td>
            </tr>
        <?php endwhile; ?>
        <?php $con->close(); ?>
    </table>
    <form action="scripts/insert.php" method="POST" class="inscription">
        <h5>Insertar nuevo alumno</h5>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad">
        </div>
        <div>
            <input type="submit" value="Insertar">
        </div>
    </form>

    </section>
</body>
</html>
