let produtos = [
    { nome: 'Produto 1', preco: 25.00 },
    { nome: 'Produto 2', preco: 75.00 },
    { nome: 'Produto 3', preco: 150.00 }
];

function exibirProdutos() {
    let listaProdutos = document.querySelector('.lista-produtos');
    listaProdutos.innerHTML = '';
    produtos.forEach(produto => {
        let itemProduto = document.createElement('div');
        itemProduto.textContent = produto.nome + ' - R$ ' + produto.preco.toFixed(2);
        listaProdutos.appendChild(itemProduto);
    });
}

function filtrarProdutos() {
    let filtroPreco = document.getElementById('filtro-preco').value;
    let produtosFiltrados = [];
    switch (filtroPreco) {
        case '1':
            produtosFiltrados = produtos.filter(produto => produto.preco <= 50.00);
            break;
        case '2':
            produtosFiltrados = produtos.filter(produto => produto.preco > 50.00 && produto.preco <= 100.00);
            break;
        case '3':
            produtosFiltrados = produtos.filter(produto => produto.preco > 100.00);
            break;
        default:
            produtosFiltrados = produtos;
            break;
    }
    produtos = produtosFiltrados;
    exibirProdutos();
}

// Exibe todos os produtos ao carregar a página
document.addEventListener('DOMContentLoaded', function() {
    exibirProdutos();
});
