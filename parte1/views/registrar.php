<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Registrar Empleado</title>
</head>
<body>

<?php include __DIR__ ."/../menu.php"; ?>

<h1>Registrar Empleado</h1>

<form method="POST" action="router.php?controller=empleado&action=registrar">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Salario Base:</label><br>
    <input type="number" step="0.01" name="salario_base" required><br><br>

    <label>Comisión (%):</label><br>
    <input type="number" step="0.01" name="comision_pct" required><br><br>

    <input type="submit" value="Guardar">
</form>

<a href="router.php?controller=empleado&action=listar">Volver al listado</a>

</body>
</html>
