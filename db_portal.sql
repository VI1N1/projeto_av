SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS `db_portal`;
CREATE DATABASE IF NOT EXISTS `db_portal` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_portal`;

CREATE TABLE `login` (
  `codigo_login` int(11) NOT NULL,
  `nome_completo_login` varchar(100) NOT NULL,
  `nome_login` varchar(50) NOT NULL,
  `senha_login` varchar(32) NOT NULL,
  `tipo_login` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `login`
  ADD PRIMARY KEY (`codigo_login`),
  ADD UNIQUE KEY `nome_login` (`nome_login`);

ALTER TABLE `login`
  MODIFY `codigo_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

INSERT INTO `login` (`codigo_login`, `nome_completo_login`, `nome_login`, `senha_login`, `tipo_login`) VALUES
(1, 'Administrador', 'admin', '202cb962ac59075b964b07152d234b70', 0),
(2, 'Usuario', 'user', '202cb962ac59075b964b07152d234b70', 1);

CREATE TABLE `usuario` (
  `codigo_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `cpf_usuario` int(11) NOT NULL,
  `num_celular` int(11) NOT NULL,
  `codigo_login` int(11)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo_usuario`),
  ADD UNIQUE KEY `nome_usuario` (`nome_usuario`),
  ADD UNIQUE KEY `cpf_usuario` (`cpf_usuario`),
  ADD FOREIGN KEY (`codigo_login`) REFERENCES login(`codigo_login`);

ALTER TABLE `usuario`
  MODIFY `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `veiculo` (
  `codigo_veiculo` int(11) NOT NULL,
  `marca_veiculo` varchar(50) NOT NULL,
  `modelo_veiculo` varchar(50) NOT NULL,
  `descricao_veiculo` varchar(200) NOT NULL,
  `ano_veiculo` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`codigo_veiculo`);

ALTER TABLE `veiculo`
  MODIFY `codigo_veiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

INSERT INTO `veiculo` (`codigo_veiculo`, `marca_veiculo`, `modelo_veiculo`,`descricao_veiculo`,`ano_veiculo`) VALUES
(1, 'Honda', 'N/A', 'Não há nada ainda', 2003);

CREATE TABLE `vendedor` (
  `codigo_vendedor` int(11) NOT NULL,
  `nome_vendedor` varchar(100) NOT NULL,
  `cpf_vendedor` int(11) NOT NULL,
  `num_celular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`codigo_vendedor`),
  ADD UNIQUE KEY `nome_vendedor` (`nome_vendedor`),
  ADD UNIQUE KEY `cpf_vendedor` (`cpf_vendedor`);

ALTER TABLE `vendedor`
  MODIFY `codigo_vendedor` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;








