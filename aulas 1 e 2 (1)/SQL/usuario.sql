
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `usuario` (`id`, `nome`, `senha`, `email`) VALUES
(1, 'Geovani', '123', 'geovanifranca76@gmail.com'),
(2, 'Bernardo', '123', 'bernardolaurindo2006@gmail.com'),
(3, 'Sarah', '123', 'sarahlindalinda@gmail.com'),
(4, 'Gabriel', '123', 'gabrielbujao@gmail.com'),
(5, 'Ana', '123', 'anamrangel@gmail.com.br');



ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
