create database if not exists lojarecode;
use lojarecode;

CREATE TABLE `lojarecode`.`pedidos` (
  `idpedido` INT NOT NULL AUTO_INCREMENT,
  `nomeCliente` VARCHAR(200) NULL,
  `endereco` VARCHAR(200) NULL,
  `telefone` INT NULL,
  `nomeProduto` VARCHAR(100) NULL,
  `valorUnitario` DECIMAL(8,2) NULL,
  `quantidade` int NULL,
  PRIMARY KEY (`idpedido`));
  
  
CREATE TABLE `lojarecode`.`produtos` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `descricao` VARCHAR(300) NULL,
  `preco_antigo` DECIMAL(8,2) NULL,
  `preco` DECIMAL(8,2) NULL,
  `imagem` VARCHAR(300) NULL,
  PRIMARY KEY (`id_produto`));
  
insert into produtos  values   
(null, 'geladeira', 'Geladeira', '2000.00', '1500.00', '../fotos/geladeira2.jpg'),
(null, 'geladeira', 'Geladeira', '6389.00', '5019.00', '../fotos/geladeira.jpg'),
(null, 'geladeira', 'Geladeira', '3500.00', '2000.00', '../fotos/geladeira3.jpg'),
(null, 'fogao', 'Fogão', '1000.00', '919.00', '../fotos/fogao.jpg'),
(null, 'fogao', 'Fogão', '1856.00', '1239.00', '../fotos/fogao2.jpg'),
(null, 'microondas', 'Microondas', '800.00', '780.00', '../fotos/micro.jpg'),
(null, 'microondas', 'Microondas', '900.00', '832.00', '../fotos/micro2.jpg'),
(null, 'microondas', 'Microondas', '600.00', '498.00', '../fotos/micro3.jpg'),
(null, 'lavaropas', 'Maquina de lavar roupas', '4725.00', '4145.00', '../fotos/maquina.jpg'),
(null, 'lavaropas', 'Maquina de lavar roupas', '3000.00', '2754.00', '../fotos/maquinq2.jpg'),
(null, 'lavalocas', 'Maquina de lavar louças', '4000.00', '3895.00', '../fotos/lavalouca2.jpg'),
(null, 'lavalocas', 'Maquina de lavar louças', '5775.00', '4968.00', '../fotos/lavalouca3.jpg');

  
  
  
