/*

CREATE USER 'unicap'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'unicap'@'localhost' WITH GRANT OPTION;
CREATE USER 'unicap'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'unicap'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;


*/

CREATE DATABASE `DAMN-unicap` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `DAMN-unicap`;

DROP TABLE IF EXISTS `notas`;
CREATE TABLE `notas` (
  `usuario` int(11) NOT NULL,
  `materia` varchar(255) NOT NULL,
  `nota` float NOT NULL,
  KEY `usuario` (`usuario`),
  CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `notas` (`usuario`, `materia`, `nota`) VALUES
(2,	'PROGRAMACAO I',	10),
(2,	'MATEMATICA LOGICA',	10),
(2,	'FISICA',	10),
(2,	'SEGURANCA',	10);

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tipo_usuario` (`id`, `nome`) VALUES
(1,	'PROFESSOR'),
(2,	'ALUNO');

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo` (`tipo`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `tipo`) VALUES
(1,	'JOAO NEVES',	'0001',	'123456',	1),
(2,	'MARCO ANTONIO',	'0002',	'123456',	2);

-- 2022-11-06 23:51:04