document.getElementById('formAdicionarMaterial').addEventListener('submit', function (e) {
    e.preventDefault();
    
    fetch('index.php', {
        method: 'POST',
        body: new FormData(this), // 'this' refers to the form element
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Response from the PHP script
    })
    .catch(error => {
        console.error('Ocorreu um erro:', error);
    });
});

document.getElementById('pesquisarMaterial').addEventListener('click', function () {
    const termo = document.getElementById('termoPesquisa').value;
    
    fetch('index.php?termo=' + termo, {
        method: 'GET',
    })
    .then(response => response.json())
    .then(data => {
        console.log(data); // Response from the PHP script
        // Aqui você pode atualizar a exibição dos resultados no elemento HTML com id "resultadoPesquisa".
        // Por exemplo: document.getElementById('resultadoPesquisa').innerHTML = JSON.stringify(data);
    })
    .catch(error => {
        console.error('Ocorreu um erro:', error);
    });
});
