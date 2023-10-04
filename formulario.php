<html>
<body>
<form action="formget.php" method="get">

    Nombre: <input type="text" name="nombre"><br>

    Email: <input type="email" name="email"><br>

    Estudios: <select name="estudios">
        <option value="bachiller">Bachiller</option>
        <option value="doctorado">Doctorado</option>
        <option value="grado_superior">Grado Superior</option>
        <option value="master">Master</option>
    </select>

    <input type="file" name="avatar" accept="image/*">
    <input type="submit" value="Enviar">

</form>
</body>
</html>