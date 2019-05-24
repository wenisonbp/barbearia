CREATE TABLE `barbearia` (
  `id_barbearia` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `id_dono` int(11) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `cnpj` varchar(30) NOT NULL,
  `sobre` text,
  `inicio_funcionamento` time DEFAULT NULL,
  `fim_funcionamento` time DEFAULT NULL,
  `informacao_adicional` text,
  PRIMARY KEY (`id_barbearia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

CREATE TABLE `fila` (
  `id_fila` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_barbeario` int(11) NOT NULL,
  `id_servico` int(11) DEFAULT NULL,
  `atendido` tinyint(1) DEFAULT NULL,
  `horario_inicio` timestamp NULL DEFAULT NULL,
  `horario_fim` timestamp NULL DEFAULT NULL,
  `avaliacao` decimal(10,0) DEFAULT NULL,
  `nao_compareceu` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_fila`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8


CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `caminho` varchar(150) NOT NULL,
  `id_barbearia` int(11) NOT NULL,
  `posicao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_imagem`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

CREATE TABLE `servico` (
  `id_servico` int(11) NOT NULL AUTO_INCREMENT,
  `id_barbearia` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `servico` varchar(30) NOT NULL,
  `tempo` time DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_servico`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `permissao` tinyint(4) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8