<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Materiais de Pesquisa</title>
</head>
<body>
    <h1>Adicionar Material de Pesquisa</h1>
    <?php displayAddMaterialForm(); ?>
    <script>
        function handleFormSubmission() {
            document.getElementById('formAdicionarMaterial').addEventListener('submit', function (e) {
                e.preventDefault();
                fetch('funcionario.php', {
                    method: 'POST',
                    body: new FormData(this),
                })
                .then(response => response.text())
                .then(data => {
                    document.getElementById('resultadoPesquisa').innerHTML = data;
                    document.getElementById('formAdicionarMaterial').style.display = 'none';
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        }

        <?php handleRequests(); ?>
    </script>
</body>
</html>

<?php
function displayAddMaterialForm() {
    // HTML code for the form to add research material
    echo <<<EOT
    <form id="formAdicionarMaterial" method="post">
        <input type="hidden" name="method" value="post">
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

function handleRequests() {
    $conn = connectToDatabase();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        handlePostRequest($conn);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['termo'])) {
        handleSearchRequest($conn, $_GET['termo']);
    }

    $conn->close();
}

function handleSearchRequest($conn, $termo) {
    $termo = mysqli_real_escape_string($conn, $termo);

    $sql = "SELECT Titulo, Descricao, Categoria, Conteudo 
            FROM MateriaisPesquisa 
            WHERE Pesquisa = ? OR Pesquisa2 = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $termo, $termo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h2>Resultados da pesquisa para '$termo':</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<h1> " . $row['Titulo'] . "</h1>";
            echo "<h2> " . $row['Descricao'] . "</h2>";
            echo "<li> " . $row['Categoria'] . "</li>";
            echo "<p> " . $row['Conteudo'] . "</p>";
            echo "<br>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum material encontrado para o termo de pesquisa '$termo'.";
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
    // Validation and Sanitization should be added here

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $conteudo = $_POST['conteudo'];
    $categoria = $_POST['categoria'];
    $pesquisa1 = $_POST['pesquisa1'];
    $pesquisa2 = $_POST['pesquisa2'];

    $sql = "INSERT INTO MateriaisPesquisa (Titulo, Descricao, Categoria, Conteudo, Pesquisa, Pesquisa2) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $titulo, $descricao, $categoria, $conteudo, $pesquisa1, $pesquisa2);

    if ($stmt->execute()) {
        echo "Material inserido com sucesso!";
        // You may want to redirect or provide additional actions here
        echo "<script>document.getElementById('formAdicionarMaterial').style.display = 'none';</script>";
    } else {
        echo "Erro ao inserir o material: " . $stmt->error;
    }
}

?>
