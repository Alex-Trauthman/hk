<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Materiais de Pesquisa</title>
    
</head>
<body>
   

    <div id="resultadoPesquisa"></div>

    <?php
        handleRequests();
    ?>
    
    <script>
        handleFormSubmission();
    </script>
</body>
</html>

<?php 

/* function displayAddMaterialForm() {
    // HTML code for the form to add research material
    echo <<<EOT
    <form id="formAdicionarMaterial">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea><br>

        <label for="conteudo">Conteúdo:</label>
        <textarea id="conteudo" name="conteudo" required></textarea><br>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" required><br>

        <label for="pesquisa1">Termo de Pesquisa 1:</label>
        <input type="text" id="pesquisa1" name="pesquisa1" required><br>

        <label for="pesquisa2">Termo de Pesquisa 2:</label>
        <input type="text" id="pesquisa2" name="pesquisa2" required><br>

        <button type="submit">Adicionar Material</button>
    </form>
EOT;
}

function displaySearchForm() {
    // HTML code for the form to search for research material
    echo <<<EOT
    <label for="termoPesquisa">Insira um termo de pesquisa:</label>
    <input type="text" id="termoPesquisa" name="termoPesquisa">
    <button id="pesquisarMaterial">Pesquisar</button>
EOT;
}*/

function handleRequests() {
    $conn = connectToDatabase();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        handlePostRequest($conn);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['termo'])) {
            handleSearchRequest($conn, $_GET['termo']);
        }
    }

    $conn->close();
}

function handleSearchRequest($conn, $termo) {
    $termo = mysqli_real_escape_string($conn, $termo); // Evita injeção de SQL

    // Realize uma consulta SQL para encontrar materiais que correspondam ao termo
    $sql = "SELECT Titulo, Descricao, Categoria, Conteudo 
            FROM MateriaisPesquisa 
            WHERE Pesquisa = '$termo' OR Pesquisa2 = '$termo'";

    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            echo "<h2>Resultados da pesquisa para '$termo':</h2>";
            echo "<ul>";
            while ($row = $result->fetch_assoc()) {
                echo "<h1>: " . $row['Titulo'] . "</h1>";
                echo "<h2>: " . $row['Descricao'] . "</h2>";
                echo "<li>: " . $row['Categoria'] . "</li>";
                echo "<p>: " . $row['Conteudo'] . "</p>";
                echo "<br>";
            }
            echo "</ul>";
        } else {
            echo "Nenhum material encontrado para o termo de pesquisa '$termo'.";
        }
    } else {
        echo "Erro na consulta: " . $conn->error;
    }
}

function connectToDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "forteen27";
    $dbname = "Funcionario";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    return $conn;
}

function handlePostRequest($conn) {
   // Code to handle POST requests
   $titulo = $_POST['titulo'];
   $descricao = $_POST['descricao'];
   $conteudo = $_POST['conteudo'];
   $categoria = $_POST['categoria'];
   $pesquisa1 = $_POST['pesquisa1'];
   $pesquisa2 = $_POST['pesquisa2'];

   $sql = "INSERT INTO MateriaisPesquisa (Titulo, Descricao, Categoria, Conteudo, Pesquisa, Pesquisa2) 
           VALUES ('$titulo', '$descricao', '$categoria', '$conteudo', '$pesquisa1', '$pesquisa2')";

   if ($conn->query($sql) === TRUE) {
       echo "Material inserido com sucesso!";
       echo "<script>document.getElementById('formAdicionarMaterial').style.display = 'none';</script>";
   } else {
       echo "Erro: " . $sql . "<br>" . $conn->error;
   }
}

function handleGetRequest($conn) {
   // Code to handle GET requests
   $termo = $_GET['termo'];

   $sql = "SELECT Titulo, Descricao, Categoria, Conteudo 
           FROM MateriaisPesquisa 
           WHERE Pesquisa = '$termo' OR Pesquisa2 = '$termo'";

   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       echo "<h2>Resultados da pesquisa para '$termo':</h2>";
       echo "<ul>";
       while ($row = $result->fetch_assoc()) {
           echo "<li>Título: " . $row['Titulo'] . "</li>";
           echo "<li>Descrição: " . $row['Descricao'] . "</li>";
           echo "<li>Categoria: " . $row['Categoria'] . "</li>";
           echo "<li>Conteúdo: " . $row['Conteudo'] . "</li>";
           echo "<br>";
       }
       echo "</ul>";
   } else {
       echo "Nenhum material encontrado para o termo de pesquisa '$termo'.";
   }
}
?>

<script src="index.js"></script>
