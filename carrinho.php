<!DOCTYPE html>
<html>
<head>
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Minha Loja</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="carrinho">
            <h2>Carrinho de Compras</h2>
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Verifica se o carrinho está vazio
                    if (empty($_SESSION['carrinho'])) {
                        echo "<tr><td colspan='2'>Carrinho vazio</td></tr>";
                    } else {
                        // Exibe os itens do carrinho
                        foreach ($_SESSION['carrinho'] as $item) {
                            echo "<tr><td>{$item['nome']}</td><td>R$ {$item['preco']}</td></tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
            <a href="finalizar-compra.php">Finalizar Compra</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Minha Loja. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
