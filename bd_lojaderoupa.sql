-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/05/2023 às 15:53
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_lojaderoupa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `codcategoria` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `codcliente` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `rua` varchar(20) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `cep` int(8) NOT NULL,
  `numero` int(4) NOT NULL,
  `uf` char(2) NOT NULL DEFAULT 'ES',
  `usuario` varchar(40) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`codcliente`, `cpf`, `nome`, `telefone`, `email`, `rua`, `bairro`, `cidade`, `cep`, `numero`, `uf`, `usuario`, `senha`) VALUES
(26, '999794450', 'Gabriel da silva ', '999794450', 'gabreil@12313465', 'Sao Paulo', 'Carapina', 'SERRA', 45464546, 12312, 'ES', 'Carapina', '123456'),
(75, '1', 'daniela amaral', '111111', 'dsadas@dasd', 'dsa', 'dasdaddads', 'dasd', 1, 12312, 'ES', 'dsad', 'dsad'),
(79, '2', 'das', 'dsd', '3123123@123132', '13123', '312312', '3123', 31231, 32131, 'ES', '1', '3'),
(80, '13123', 'HELIABINER', '21313', 'dsad@dsdad', 'SDDSADDDS', 'SSADASD', 'DSAD', 3333, 3131, 'ES', '3333', '3333'),
(81, '1111', '2222222222222', '111', 'dsadsa@sddddsd', 'dddddd', 'sdsasdasd', 'dasdsaa', 331231, 1111, 'ES', '555', '555'),
(82, '42355645645', 'Gabriel da silva do amaral', 'dsd@dsada', 'gabriel@gabriel', 'SAO PAULO', 'CARAPINA', 'SERRA', 86484645, 123, 'ES', '123', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cor`
--

CREATE TABLE `tb_cor` (
  `codcor` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `codfuncionario` int(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `data_de_admissao` date NOT NULL DEFAULT current_timestamp(),
  `data_de_nascimento` text NOT NULL,
  `rua` varchar(20) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `cep` int(8) NOT NULL,
  `uf` char(2) NOT NULL DEFAULT 'ES',
  `usuario` varchar(40) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`codfuncionario`, `cpf`, `nome`, `data_de_admissao`, `data_de_nascimento`, `rua`, `bairro`, `cidade`, `cep`, `uf`, `usuario`, `senha`) VALUES
(29, '12222222', 'Teste2', '2023-05-13', '2223-03-21', 'Carapebus', 'Centro', 'Vitória', 13123131, 'ES', '145', '145'),
(30, '213131', 'Teste3', '2023-05-13', '1233-03-31', '1312312', '3131313', '3123213', 31312313, 'ES', '3131', '312312'),
(31, '13123123123', 'teste1', '2023-05-13', '3332-02-12', '3123', '131313', '3131', 13123, 'ES', '31313', '31231'),
(32, '11111111111', 'teste4', '2023-05-13', '0322-02-23', '11111111', '111111111111111', '1111111111111111', 11111111, 'ES', 'gabriel@123', '111111111111111'),
(34, '22233311444', 'teste5', '2023-05-13', '2223-03-31', 'eqweqwewqeqwe', 'ewqeqweqw', 'Serra', 98798798, 'ES', 'teste_login123$', 'ewqeqweqweqe'),
(35, '2131', 'fas', '2023-05-17', '2222-02-02', '321', '123', '321', 3213, 'ES', '1', '1'),
(36, '3123', 'dasd', '2023-05-24', '2002-03-23', 'ddsa', 'dasd', 'sedas', 31231, 'ES', '5', '5');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_itens_pedido`
--

CREATE TABLE `tb_itens_pedido` (
  `coditens_pedido` int(11) NOT NULL,
  `cod_prod_ipe` int(11) NOT NULL,
  `cod_ped_ipe` int(11) NOT NULL,
  `valorTotal` double NOT NULL,
  `quantidadeUnitaria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `codpedido` int(11) NOT NULL,
  `data_emissao` datetime NOT NULL DEFAULT current_timestamp(),
  `cod_clie_pedi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `codproduto` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` double NOT NULL,
  `quantidade` int(11) NOT NULL,
  `descricao` longtext NOT NULL,
  `cod_categ_prod` int(11) NOT NULL,
  `cod_cor_prod` int(11) NOT NULL,
  `cod_tamanho_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tamanho`
--

CREATE TABLE `tb_tamanho` (
  `codtamanho` int(11) NOT NULL,
  `nome` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`codcategoria`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`codcliente`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Índices de tabela `tb_cor`
--
ALTER TABLE `tb_cor`
  ADD PRIMARY KEY (`codcor`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices de tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`codfuncionario`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Índices de tabela `tb_itens_pedido`
--
ALTER TABLE `tb_itens_pedido`
  ADD PRIMARY KEY (`coditens_pedido`),
  ADD KEY `cod_ped_ipe` (`cod_ped_ipe`),
  ADD KEY `cod_prod_ipe` (`cod_prod_ipe`);

--
-- Índices de tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`codpedido`),
  ADD KEY `cod_clie_pedi` (`cod_clie_pedi`);

--
-- Índices de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`codproduto`),
  ADD KEY `cod_categ_prod` (`cod_categ_prod`),
  ADD KEY `cod_cor_prod` (`cod_cor_prod`),
  ADD KEY `cod_tamanho_prod` (`cod_tamanho_prod`);

--
-- Índices de tabela `tb_tamanho`
--
ALTER TABLE `tb_tamanho`
  ADD PRIMARY KEY (`codtamanho`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `codcategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `codcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de tabela `tb_cor`
--
ALTER TABLE `tb_cor`
  MODIFY `codcor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `codfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `tb_itens_pedido`
--
ALTER TABLE `tb_itens_pedido`
  MODIFY `coditens_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `codpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `codproduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_tamanho`
--
ALTER TABLE `tb_tamanho`
  MODIFY `codtamanho` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_itens_pedido`
--
ALTER TABLE `tb_itens_pedido`
  ADD CONSTRAINT `tb_itens_pedido_ibfk_1` FOREIGN KEY (`cod_ped_ipe`) REFERENCES `tb_pedido` (`codpedido`),
  ADD CONSTRAINT `tb_itens_pedido_ibfk_2` FOREIGN KEY (`cod_prod_ipe`) REFERENCES `tb_produto` (`codproduto`);

--
-- Restrições para tabelas `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD CONSTRAINT `tb_pedido_ibfk_1` FOREIGN KEY (`cod_clie_pedi`) REFERENCES `tb_cliente` (`codcliente`);

--
-- Restrições para tabelas `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD CONSTRAINT `tb_produto_ibfk_1` FOREIGN KEY (`cod_categ_prod`) REFERENCES `tb_categoria` (`codcategoria`),
  ADD CONSTRAINT `tb_produto_ibfk_2` FOREIGN KEY (`cod_cor_prod`) REFERENCES `tb_cor` (`codcor`),
  ADD CONSTRAINT `tb_produto_ibfk_3` FOREIGN KEY (`cod_tamanho_prod`) REFERENCES `tb_tamanho` (`codtamanho`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
