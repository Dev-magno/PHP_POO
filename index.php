<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div-form">
        <h1>CRUD de cursos</h1>
        <form action="adicionar_curso.php" method="POST">
            <label for="curso">Curso</label>
            <input type="text" name="curso" id="curso" required>
            
            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao" rows="4" required>Aprenda programação em diversas linguagens.</textarea>

            <label for="cargahoraria">Carga Horária</label>
            <input type="number" name="cargahoraria" id="cargahoraria" required>

            <label for="professor">Professor</label>
            <input type="text" name="professor" id="professor" required>
            <input id="submit" type="submit" value="Adicionar Curso">
        </form>
    </div>

    <div id="listar">
        <h2>Listar Cursos</h2>
        <div id="listar-curso">
            <?php include 'listar_cursos.php'; ?>
        </div>
    </div>
</body>
</html>
