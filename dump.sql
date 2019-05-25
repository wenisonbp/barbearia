CREATE TABLE `barbearia` (
  `id_barbearia` varchar(50) NOT NULL,
  `nome_barbearia` varchar(50) DEFAULT NULL,
  `num_endereco` varchar(45) DEFAULT NULL,
  `complemento1_endereco` varchar(45) DEFAULT NULL,
  `complemento2_endereco` varchar(45) DEFAULT NULL,
  `complemento3_endereco` varchar(45) DEFAULT NULL,
  `bairro_endereco` varchar(45) DEFAULT NULL,
  `cidade_endereco` varchar(45) DEFAULT NULL,
  `estado_endereco` varchar(45) DEFAULT NULL,
  `cnpj` varchar(30) DEFAULT NULL,
  `sobre` text,
  `email` varchar(60) DEFAULT NULL,
  `inicio_funcionamento` time DEFAULT NULL,
  `fim_funcionamento` time DEFAULT NULL,
  `informacao_adicional` text,
  `logradouro_endereco` varchar(80) DEFAULT NULL,
  `latitude` varchar(80) DEFAULT NULL,
  `longitude` varchar(80) DEFAULT NULL,
  `contato_1` varchar(15) DEFAULT NULL,
  `contato_2` varchar(15) DEFAULT NULL,
  `id_dono` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_barbearia`),
  UNIQUE KEY `cnpj_UNIQUE` (`cnpj`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `id_dono_UNIQUE` (`id_dono`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `fila` (
  `id_fila` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` varchar(50) NOT NULL,
  `id_barbearia` varchar(50) NOT NULL,
  `id_servico` varchar(50) DEFAULT NULL,
  `atendido` tinyint(1) DEFAULT NULL,
  `horario_inicio` time DEFAULT NULL,
  `horario_fim` time DEFAULT NULL,
  `avaliacao` decimal(10,0) DEFAULT NULL,
  `nao_compareceu` tinyint(1) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `nome_barbearia` varchar(80) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_fila`)
) ENGINE=MyISAM AUTO_INCREMENT=132565 DEFAULT CHARSET=utf8;


CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `caminho` varchar(150) NOT NULL,
  `id_barbearia` int(11) NOT NULL,
  `posicao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_imagem`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `servico` (
  `id_servico` varchar(50) NOT NULL,
  `id_barbearia` varchar(50) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `servico` varchar(30) NOT NULL,
  `tempo` time DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_servico`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

CREATE TABLE `usuario` (
  `id_usuario` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `permissao` tinyint(4) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  UNIQUE KEY `token_UNIQUE` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;