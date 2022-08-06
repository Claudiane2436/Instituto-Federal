-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2022 às 02:41
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabfuncionario`
--

CREATE TABLE `tabfuncionario` (
  `fun_id` int(11) NOT NULL,
  `fun_nome` varchar(50) NOT NULL,
  `fun_data` varchar(15) NOT NULL,
  `fun_cpf` varchar(15) NOT NULL,
  `fun_ende` varchar(50) NOT NULL,
  `fun_numero` int(20) NOT NULL,
  `fun_cidade` varchar(50) NOT NULL,
  `fun_cp` int(30) NOT NULL,
  `fun_telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabfuncionario`
--

INSERT INTO `tabfuncionario` (`fun_id`, `fun_nome`, `fun_data`, `fun_cpf`, `fun_ende`, `fun_numero`, `fun_cidade`, `fun_cp`, `fun_telefone`) VALUES
(1, 'Juliano da Paz', '15-05-1987', '079.78946.4778', 'Rua dos Mais Fortes', 84, 'Bonsucesso', 759, '878644');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tablogin`
--

CREATE TABLE `tablogin` (
  `login_id` int(11) NOT NULL,
  `login_usuario` varchar(10) NOT NULL,
  `login_senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tablogin`
--

INSERT INTO `tablogin` (`login_id`, `login_usuario`, `login_senha`) VALUES
(2, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabservicos`
--

CREATE TABLE `tabservicos` (
  `ser_id` int(11) NOT NULL,
  `ser_mascote` int(11) NOT NULL,
  `ser_tipo` varchar(30) NOT NULL,
  `ser_data` varchar(30) NOT NULL,
  `ser_obs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabservicos`
--

INSERT INTO `tabservicos` (`ser_id`, `ser_mascote`, `ser_tipo`, `ser_data`, `ser_obs`) VALUES
(1, 1, 'Banho e Tosa', '13-08-2020', ''),
(2, 3, 'Banho e Tosa', '13-05-2018', NULL),
(4, 1, 'Banho e Tosa', '12/06/2022', 'kjjkkj');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabveterinario`
--

CREATE TABLE `tabveterinario` (
  `vete_id` int(11) NOT NULL,
  `vete_mascote` varchar(60) NOT NULL,
  `vete_sexo` varchar(20) NOT NULL,
  `vete_raca` varchar(40) NOT NULL,
  `vete_idade` int(11) NOT NULL,
  `vete_peso` int(11) NOT NULL,
  `vete_propri` varchar(60) NOT NULL,
  `vete_tele` varchar(15) NOT NULL,
  `vete_ende` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabveterinario`
--

INSERT INTO `tabveterinario` (`vete_id`, `vete_mascote`, `vete_sexo`, `vete_raca`, `vete_idade`, `vete_peso`, `vete_propri`, `vete_tele`, `vete_ende`) VALUES
(1, 'Branquinho', 'Feminino', 'Poodle', 21, 14, 'Luiz Felipe', '4578452', 'Rua dos Pobres'),
(3, 'Fofinha', 'Feminino', 'Chihuahua', 4, 14, 'Beatriz Ferreira', '54789756', 'Estrada dos Onze de Março');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabfuncionario`
--
ALTER TABLE `tabfuncionario`
  ADD PRIMARY KEY (`fun_id`);

--
-- Índices para tabela `tablogin`
--
ALTER TABLE `tablogin`
  ADD PRIMARY KEY (`login_id`);

--
-- Índices para tabela `tabservicos`
--
ALTER TABLE `tabservicos`
  ADD PRIMARY KEY (`ser_id`),
  ADD KEY `ser_mascote` (`ser_mascote`);

--
-- Índices para tabela `tabveterinario`
--
ALTER TABLE `tabveterinario`
  ADD PRIMARY KEY (`vete_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabfuncionario`
--
ALTER TABLE `tabfuncionario`
  MODIFY `fun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tablogin`
--
ALTER TABLE `tablogin`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tabservicos`
--
ALTER TABLE `tabservicos`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tabveterinario`
--
ALTER TABLE `tabveterinario`
  MODIFY `vete_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tabservicos`
--
ALTER TABLE `tabservicos`
  ADD CONSTRAINT `tabservicos_ibfk_1` FOREIGN KEY (`ser_mascote`) REFERENCES `tabveterinario` (`vete_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
