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
  `cep` varchar(25) DEFAULT NULL,
  `distancia` decimal(3,1) DEFAULT NULL,
  `avaliacao` decimal(3,1) DEFAULT NULL,
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
  `nome_cliente` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_fila`)
) ENGINE=MyISAM AUTO_INCREMENT=132571 DEFAULT CHARSET=utf8;


CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `caminho` varchar(150) NOT NULL,
  `id_barbearia` varchar(50) NOT NULL,
  `posicao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_imagem`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8

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

--- BARBEARIAS ---

INSERT INTO `qbarber`.`barbearia` (`id_barbearia`, `nome_barbearia`, `num_endereco`, `bairro_endereco`, `cidade_endereco`, `estado_endereco`, `cnpj`, `sobre`, `email`, `inicio_funcionamento`, `fim_funcionamento`, `informacao_adicional`, `logradouro_endereco`, `contato_1`, `contato_2`, `id_dono`, `cep`, `distancia`, `avaliacao`) 
VALUES 
('asd1asd3154', 'Barbearia Italiana', '150', 'Aldeota', 'Fortaleza', 'CE', '5420056354569', 'Barbearia do clássico ao moderno. Agende seu horário e venha se surpreender.', 'barbearia_italiana@teste.com', '08:00', '18:00', 'Sem informações.', 'Av. C', '(85) 98000-5556', '(85) 99000-5555', 'jkasdhhjsd545123', '60543-00', '5', '5'),
('asd1asd3155', 'Os Marujos Barbearia', '150', 'Aldeota', 'Fortaleza', 'CE', '5520056550569', 'Profissionais preparados para atender à sua expectativa. Agende seu horário e venha se surpreender com a qualidade dos nosso atendimento.', 'osmarujos@teste.com', '08:00', '18:00', 'Sem informações.', 'Av. C', '(85) 98000-5556', '(85) 99000-5555', 'jkasdhhjsd545124', '60543-00', '5', '3'),
('asd1asd3156', 'Barbearia João Meleiro', '150', 'Aldeota', 'Fortaleza', 'CE', '5820052455569', 'Barbearia voltada para o público masculino, ambiente retrô, conforto e serviço de qualidade...', 'barbearia_joao@teste.com', '08:00', '18:00', 'Sem informações.', 'Av. C', '(85) 98000-5556', '(85) 99000-5555', 'jkasdhhjsd545125', '60543-00', '5', '4'),
('asd1asd3157', 'Barbearia Caravela', '150', 'Aldeota', 'Fortaleza', 'CE', '5920057458569', 'Local Recomendado Para O Público Masculino. Profissionais Extremamente Capacitados Para Atender Os Clientes Com Excelencia.', 'caravela@teste.com', '08:00', '18:00', 'Sem informações.', 'Av. C', '(85) 98000-5556', '(85) 99000-5555', 'jkasdhhjsd545126', '60543-00', '5', '4'),
('asd1asd3158', 'Barbearia do Beto', '150', 'Aldeota', 'Fortaleza', 'CE', '5220056456569', 'Além de serviços de barbearia, contamos com tatuadores experientes e uma variada carta de cervejas especiais.', 'barbearia_beto@teste.com', '08:00', '18:00', 'Sem informações.', 'Av. C', '(85) 98000-5556', '(85) 99000-5555', 'jkasdhhjsd545127', '60543-00', '5', '5');

--- SERVIÇOS ---

INSERT INTO `qbarber`.`servico` (`id_servico`, `id_barbearia`, `tipo`, `servico`, `tempo`, `preco`) VALUES ('1', 'asd1asd3154', 'Combo', 'Corte + Barba', '00:40:00', '25');
INSERT INTO `qbarber`.`servico` (`id_servico`, `id_barbearia`, `tipo`, `servico`, `tempo`, `preco`) VALUES ('2', 'asd1asd3154', 'Combo', 'Corte + Progressiva', '00:50:00', '50');
INSERT INTO `qbarber`.`servico` (`id_servico`, `id_barbearia`, `tipo`, `servico`, `tempo`, `preco`) VALUES ('3', 'asd1asd3154', 'Cabelo', 'Corte', '00:30:00', '30');
INSERT INTO `qbarber`.`servico` (`id_servico`, `id_barbearia`, `tipo`, `servico`, `tempo`, `preco`) VALUES ('4', 'asd1asd3154', 'Cabelo', 'Pezinho', '00:20:00', '20');
INSERT INTO `qbarber`.`servico` (`id_servico`, `id_barbearia`, `tipo`, `servico`, `tempo`, `preco`) VALUES ('5', 'asd1asd3154', 'Barba', 'Barboterapia', '00:40:00', '30');

--- IMAGEM DA LOGO ---

INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('1', '/barbearia/public/logo_barbearia/Logo1.png', 'asd1asd3154', 'logo');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('2', '/barbearia/public/logo_barbearia/Logo2.jfif', 'asd1asd3155', 'logo');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('3', '/barbearia/public/logo_barbearia/Logo3.jfif', 'asd1asd3156', 'logo');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('4', '/barbearia/public/logo_barbearia/Logo4.jfif', 'asd1asd3157', 'logo');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('5', '/barbearia/public/logo_barbearia/Logo5.jpg', 'asd1asd3158', 'logo');

--- IMAGENS DO SLIDE ---

INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('6', '/barbearia/public/slide_barbearia/a1.jpg', 'asd1asd3154', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('7', '/barbearia/public/slide_barbearia/a2.jpg', 'asd1asd3154', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('8', '/barbearia/public/slide_barbearia/a3.jpg', 'asd1asd3154', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('9', '/barbearia/public/slide_barbearia/b1.jpg', 'asd1asd3155', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('10', '/barbearia/public/slide_barbearia/b2.jpg', 'asd1asd3155', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('11', '/barbearia/public/slide_barbearia/b3.jpg', 'asd1asd3155', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('12', '/barbearia/public/slide_barbearia/c1.jpg', 'asd1asd3156', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('13', '/barbearia/public/slide_barbearia/c2.jpg', 'asd1asd3156', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('14', '/barbearia/public/slide_barbearia/c3.jpg', 'asd1asd3156', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('15', '/barbearia/public/slide_barbearia/d1.jpg', 'asd1asd3157', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('16', '/barbearia/public/slide_barbearia/d2.jpg', 'asd1asd3157', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('17', '/barbearia/public/slide_barbearia/d3.jpg', 'asd1asd3157', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('18', '/barbearia/public/slide_barbearia/e1.jpg', 'asd1asd3158', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('19', '/barbearia/public/slide_barbearia/e2.jpg', 'asd1asd3158', 'slide');
INSERT INTO `qbarber`.`imagem` (`id_imagem`, `caminho`, `id_barbearia`, `posicao`) VALUES ('20', '/barbearia/public/slide_barbearia/e3.jpg', 'asd1asd3158', 'slide');

--- USUÁRIOS ---

INSERT INTO `qbarber`.`usuario` (`id_usuario`, `login`, `senha`, `permissao`, `nome`, `token`) VALUES ('jkasdhhjsd545123', 'barbearia_italiana@teste.com', '12345', '1', 'Teste', '1');
INSERT INTO `qbarber`.`usuario` (`id_usuario`, `login`, `senha`, `permissao`, `nome`, `token`) VALUES ('jkasdhhjsd545124', 'osmarujos@teste.com', '12345', '1', 'Teste', '2');
INSERT INTO `qbarber`.`usuario` (`id_usuario`, `login`, `senha`, `permissao`, `nome`, `token`) VALUES ('jkasdhhjsd545125', 'barbearia_joao@teste.com', '12345', '1', 'Teste', '3');
INSERT INTO `qbarber`.`usuario` (`id_usuario`, `login`, `senha`, `permissao`, `nome`, `token`) VALUES ('jkasdhhjsd545126', 'caravela@teste.com', '12345', '1', 'Teste', '4');
INSERT INTO `qbarber`.`usuario` (`id_usuario`, `login`, `senha`, `permissao`, `nome`, `token`) VALUES ('jkasdhhjsd545127', 'barbearia_beto@teste.com', '12345', '1', 'Teste', '5');