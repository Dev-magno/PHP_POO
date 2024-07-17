<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="divi-form">
        <h1>CRUD de cursos</h1>
        <form action="adicionar_curso.php">
            <label for="curso">Curso</label>
            <input type="text" name="curso" id="curso" require>
            
            <label for="descrição">Descrição</label>
            <textarea id="descricao" name="descricao" rows="4" required>Aprenda programação em diversas linguagens.</textarea>

            <label for="cargahoraria">Carga Horária</label>
            <input type="number" name="cargahoraria" id="cargahoraria" require>

            <label for="professor">Professor</label>
            <input type="text" name="professor" id="professor" require>
            <input type="submit" value="Adicionar Curso">
        </form>
    </div>

    <div id="listar">
        <h2>Listar Crusos</h2>
        <div id="listar-curso">
            <?php include 'listar_curso.php' ?>
        </div>
    </div>
</body>
</html>