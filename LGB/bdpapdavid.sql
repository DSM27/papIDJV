-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jan-2020 às 10:19
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdpapdavid`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblmensagem`
--

CREATE TABLE `tblmensagem` (
  `idMensagem` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mensagem` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tblmensagem`
--

INSERT INTO `tblmensagem` (`idMensagem`, `nome`, `email`, `mensagem`) VALUES
(1, 'David Marques', 'david.s.marques123@gmail.com', 'sadfra'),
(2, 'David Marques', 'david.s.marques123@gmail.com', 'dasda'),
(3, 'David Marques', 'david.s.marques123@gmail.com', 'olá eu sou José Manuel vivo nos Covões'),
(4, 'David Marques', 'david.s.marques123@gmail.com', 'dsada'),
(5, 'David Marques', 'david.s.marques123@gmail.com', 'dsada'),
(6, 'David Marques', 'david.s.marques123@gmail.com', 'teste1\r\n'),
(7, 'David Marques', 'david.s.marques123@gmail.com', 'teste1\r\n'),
(8, 'Tomás Neves', 'tomascarraconeves@gmail.com', 'muita topppppppppppppppppppppppppppppp'),
(10, 'David Marques', 'david.s.marques123@gmail.com', 'ff'),
(11, 'David Marques', 'david.s.marques123@gmail.com', 'ff'),
(12, 'David Marques', 'david.s.marques123@gmail.com', 'iycrcvguhbinjokmçº'),
(13, 'David Marques', 'david.s.marques123@gmail.com', 'iycrcvguhbinjokmçº'),
(14, 'David Marques', 'david.s.marques123@gmail.com', 'teste1'),
(15, 'David Marques', 'david.s.marques123@gmail.com', 'Teste20'),
(16, 'David Marques', 'david.s.marques123@gmail.com', 'Teste20'),
(17, 'David Marques', 'david.s.marques123@gmail.com', 'Teste20'),
(18, 'David Marques', 'david.s.marques123@gmail.com', 'ta la ta'),
(19, 'David Marques', 'david.s.marques123@gmail.com', 'teste2000');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tblmensagem`
--
ALTER TABLE `tblmensagem`
  ADD PRIMARY KEY (`idMensagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblmensagem`
--
ALTER TABLE `tblmensagem`
  MODIFY `idMensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
