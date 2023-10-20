function handleFormSubmission() {
    // Este bloco de código deve ser executado ao carregar a página
    document.getElementById('formAdicionarMaterial').addEventListener('submit', function (e) {
        e.preventDefault();

        fetch('material-handleFormSubmission.php', {
            method: 'POST',
            body: new FormData(this), // 'this' refere-se ao formulário

        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('resultadoPesquisa').innerHTML = data; // Atualiza a exibição na página
            document.getElementById('formAdicionarMaterial').style.display = 'none'; // Oculta o formulário após o envio
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
}

document.addEventListener('DOMContentLoaded', function() {
    handleFormSubmission();
});

document.getElementById('formPesquisa').addEventListener('submit', function (e) {
    e.preventDefault();
    const termo = document.getElementById('pesquisa').value;

    fetch('index.php?termo=' + termo, {
        method: 'GET',
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('resultadoPesquisa').innerHTML = data;
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
