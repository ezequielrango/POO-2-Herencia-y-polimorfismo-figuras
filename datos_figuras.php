<?php
require_once 'Rectangulo.php';
require_once 'Circulo.php';
require_once 'Cuadrado.php';

if ($_GET['tipo'] === "r") {
    $f = new Rectangulo($_GET['base'], $_GET['altura']);
    $tipo = "rectángulo";
} else if ($_GET['tipo'] === "c") {
    $f = new Circulo($_GET['radio']);
    $tipo = "círculo";
} else if ($_GET['tipo'] === "u") {
    $f = new Cuadrado($_GET['lado']);
    $tipo = "cuadrado";
}

// POLIMORFISMO
$perimetro = $f->calcularPerimetro();
$area = $f->calcularArea();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Datos de la figura</title>
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
      <div class="container">
      <header class="col-12 jumbotron">
        <h1>Datos de la figura</h1>
      </header>
      <main role="main" class="col-12 row">
        <article>
            <?php echo "<p>Es un $tipo de área $area y perímetro $perimetro<p>";?>
        </article>
      </main>
        <footer class="col-12 text-muted">
            <p>Este es un ejercicio para Programación 1 (DS)</p>
        </footer>
    </div>
    </body>
</html>