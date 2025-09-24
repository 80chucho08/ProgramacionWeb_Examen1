<?php
// Incluir la clase de servicios
include 'servicioweb/clsservicios.php';

// Instanciar la clase
$servicio = new clsservicios();
$resultado = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lado = floatval($_POST['lado']);
    $altura = floatval($_POST['altura']);
    $resultado = $servicio->calcPiramideHex($lado, $altura);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Volumen Pirámide Hexagonal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Calcular Volumen de Pirámide Hexagonal</h2>
    <form method="post" class="row g-3">
        <div class="col-md-6">
            <label for="lado" class="form-label">Lado de la base (a):</label>
            <input type="number" step="any" class="form-control" id="lado" name="lado" required>
        </div>
        <div class="col-md-6">
            <label for="altura" class="form-label">Altura (h):</label>
            <input type="number" step="any" class="form-control" id="altura" name="altura" required>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
    </form>

    <?php if ($resultado !== ''): ?>
        <div class="alert alert-success mt-4">
            <strong>Volumen:</strong> <?php echo $resultado; ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
