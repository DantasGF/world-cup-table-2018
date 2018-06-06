-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2018 às 05:00
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabela_copa_do_mundo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

CREATE TABLE `grupo` (
  `grupo_chave` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`grupo_chave`) VALUES
('A'),
('B'),
('C'),
('D'),
('E'),
('F'),
('G'),
('H');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_selecao`
--

CREATE TABLE `grupo_selecao` (
  `grupo_chave` char(1) DEFAULT NULL,
  `selecao` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grupo_selecao`
--

INSERT INTO `grupo_selecao` (`grupo_chave`, `selecao`) VALUES
('A', 'EGY'),
('A', 'RUS'),
('A', 'KSA'),
('A', 'URU'),
('B', 'POR'),
('B', 'ESP'),
('B', 'MAR'),
('B', 'IRN'),
('C', 'FRA'),
('C', 'AUS'),
('C', 'PER'),
('C', 'DEN'),
('D', 'ARG'),
('D', 'ISL'),
('D', 'CRO'),
('D', 'NGA'),
('E', 'BRA'),
('E', 'SUI'),
('E', 'CRC'),
('E', 'SRB'),
('F', 'GER'),
('F', 'SWE'),
('F', 'MEX'),
('F', 'KOR'),
('G', 'BEL'),
('G', 'PAN'),
('G', 'TUN'),
('G', 'ENG'),
('H', 'POL'),
('H', 'JPN'),
('H', 'SEN'),
('H', 'COL');

-- --------------------------------------------------------

--
-- Estrutura da tabela `selecao`
--

CREATE TABLE `selecao` (
  `nome_abreviado` varchar(3) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pontos` int(11) NOT NULL DEFAULT '0',
  `partidas_jogadas` int(11) NOT NULL DEFAULT '0',
  `saldo_de_gols` int(11) NOT NULL DEFAULT '0',
  `vitorias` int(11) NOT NULL DEFAULT '0',
  `empates` int(11) NOT NULL DEFAULT '0',
  `derrotas` int(11) NOT NULL DEFAULT '0',
  `gols_pro` int(11) NOT NULL DEFAULT '0',
  `gols_contra` int(11) NOT NULL DEFAULT '0',
  `icone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `selecao`
--

INSERT INTO `selecao` (`nome_abreviado`, `nome`, `pontos`, `partidas_jogadas`, `saldo_de_gols`, `vitorias`, `empates`, `derrotas`, `gols_pro`, `gols_contra`, `icone`) VALUES
('ARG', 'Argentina', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/argentina.png'),
('AUS', 'AustrÃ¡lia', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/australia.png'),
('BEL', 'BÃ©lgica', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/belgica.png'),
('BRA', 'Brasil', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/brasil.png'),
('COL', 'ColÃ´mbia', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/colombia.png'),
('CRC', 'Costa Rica', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/costa_rica.png'),
('CRO', 'CroÃ¡cia', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/croacia.png'),
('DEN', 'Dinamarca', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/dinamarca.png'),
('EGY', 'Egito', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/egito.png'),
('ENG', 'Inglaterra', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/inglaterra.png'),
('ESP', 'Espanha', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/espanha.png'),
('FRA', 'FranÃ§a', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/franca.png'),
('GER', 'Alemanha', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/alemanha.png'),
('IRN', 'IrÃ£', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/ira.png'),
('ISL', 'IslÃ¢ndia', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/islandia.png'),
('JPN', 'JapÃ£o', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/japao.png'),
('KOR', 'Coreia do Sul', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/coreia_do_sul.png'),
('KSA', 'ArÃ¡bia Saudita', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/arabia_saudita.png'),
('MAR', 'Marrocos', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/marrocos.png'),
('MEX', 'MÃ©xico', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/mexico.png'),
('NGA', 'NigÃ©ria', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/nigeria.png'),
('PAN', 'PanamÃ¡', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/panama.png'),
('PER', 'PerÃº', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/peru.png'),
('POL', 'PolÃ´nia', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/polonia.png'),
('POR', 'Portugal', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/portugal.png'),
('RUS', 'RÃºssia', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/russia.png'),
('SEN', 'Senegal', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/senegal.png'),
('SRB', 'SÃ©rvia', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/servia.png'),
('SUI', 'SuÃ­Ã§a', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/suica.png'),
('SWE', 'SuÃ©cia', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/suecia.png'),
('TUN', 'TunÃ­sia', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/tunisia.png'),
('URU', 'Uruguai', 0, 0, 0, 0, 0, 0, 0, 0, 'files/icones/uruguai.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`grupo_chave`);

--
-- Indexes for table `grupo_selecao`
--
ALTER TABLE `grupo_selecao`
  ADD KEY `FK_grupo_selecao_grupo` (`grupo_chave`),
  ADD KEY `FK_grupo_selecao_selecao` (`selecao`);

--
-- Indexes for table `selecao`
--
ALTER TABLE `selecao`
  ADD PRIMARY KEY (`nome_abreviado`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `grupo_selecao`
--
ALTER TABLE `grupo_selecao`
  ADD CONSTRAINT `FK_grupo_selecao_grupo` FOREIGN KEY (`grupo_chave`) REFERENCES `grupo` (`grupo_chave`),
  ADD CONSTRAINT `FK_grupo_selecao_selecao` FOREIGN KEY (`selecao`) REFERENCES `selecao` (`nome_abreviado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
