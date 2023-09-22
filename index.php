<?php
$modo = 'oscuro';

if (isset($_GET['modo'])) {
    $modo = $_GET['modo'];
    setcookie('modo', $modo, time() + 3600, '/');
} elseif (isset($_COOKIE['modo'])) {
    $modo = $_COOKIE['modo'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Modo Claro/Oscuro</title>
</head>
<body class="<?php echo $modo; ?>">
    <header>
        <h1>Modo Claro/Oscuro</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php?modo=claro">Modo Claro</a></li>
            <li><a href="index.php?modo=oscuro">Modo Oscuro</a></li>
        </ul>
    </nav>
    <section>
        <p>Esta es una página de ejemplo con modos claro y oscuro.</p>
    </section>
    <footer>
        <p>&copy; 2023 Tu Sitio Web</p>
    </footer>
</body>
</html>
<style type="text/css">
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

body.oscuro {
    background-color: #333;
    color: #fff;
}

header {
    background-color: #222;
    color: #fff;
    text-align: center;
    padding: 20px;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
}

section {
    padding: 20px;
}

footer {
    background-color: #222;
    color: #fff;
    text-align: center;
    padding: 10px;
}
</style>