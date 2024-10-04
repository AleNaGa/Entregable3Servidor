<?php
include  "../scripts/connection.php";
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM alumnos where idAlumnos =$id";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>update</title>
</head>
<body>
<section class="container">
    <table class="tablaAlumnos">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>
        <?php while($row = mysqli_fetch_array($query)): ?>
            <tr>
                <td><?= $row['nombreAlumnos'] ?></td>
                <td><?= $row['edad'] ?></td>
            </tr>
        <?php endwhile; ?>
        <?php $con->close(); ?>
    </table>
    <form action="../scripts/update.php" method="POST" class="inscription">
        <h5>Editar alumno</h5>
        <div>
            <input type="hidden" name="id" value="<?= $id ?>">
        </div>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad">
        </div>
        <div>
            <input type="submit" value="editar">
        </div>
    </form>
</section>
</body>
</html>