CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL,
    imagem VARCHAR(255)
);

INSERT INTO produtos (nome, descricao, preco, imagem) VALUES ('Produto 1', 'Descrição do Produto 1', 25.00, 'assets/images/produto1.jpg');
INSERT INTO produtos (nome, descricao, preco, imagem) VALUES ('Produto 2', 'Descrição do Produto 2', 75.00, 'assets/images/produto2.jpg');
INSERT INTO produtos (nome, descricao, preco, imagem) VALUES ('Produto 3', 'Descrição do Produto 3', 150.00, 'assets/images/produto3.jpg');
