use qbarber;

CREATE TABLE barbearia (
  id_barbearia varchar(50) NOT NULL,
  nome_barbearia varchar(50) DEFAULT NULL,
  num_endereco varchar(45) DEFAULT NULL,
  complemento1_endereco varchar(45) DEFAULT NULL,
  complemento2_endereco varchar(45) DEFAULT NULL,
  complemento3_endereco varchar(45) DEFAULT NULL,
  bairro_endereco varchar(45) DEFAULT NULL,
  cidade_endereco varchar(45) DEFAULT NULL,
  estado_endereco varchar(45) DEFAULT NULL,
  cnpj varchar(30) DEFAULT NULL,
  sobre text,
  email varchar(60) DEFAULT NULL,
  inicio_funcionamento time DEFAULT NULL, 
  fim_funcionamento time DEFAULT NULL,
  informacao_adicional text,
  logradouro_endereco varchar(80) DEFAULT NULL,
  latitude varchar(80) DEFAULT NULL,
  longitude varchar(80) DEFAULT NULL,
  contato_1 varchar(15) DEFAULT NULL,
  contato_2 varchar(15) DEFAULT NULL,
  id_dono varchar(50) DEFAULT NULL,
  cep varchar(25) DEFAULT NULL,
  distancia decimal(3,1) DEFAULT NULL,
  avaliacao decimal(3,1) DEFAULT NULL,
  maps_src_embed varchar(500) NOT NULL,
  PRIMARY KEY (id_barbearia),
  UNIQUE KEY cnpj_UNIQUE (cnpj),
  UNIQUE KEY email_UNIQUE (email),
  UNIQUE KEY id_dono_UNIQUE (id_dono)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE fila (
  id_fila int(11) NOT NULL AUTO_INCREMENT,
  id_usuario varchar(50) NOT NULL,
  id_barbearia varchar(50) NOT NULL,
  id_servico varchar(50) DEFAULT NULL,
  atendido tinyint(1) DEFAULT NULL,
  horario_inicio time DEFAULT NULL,
  horario_fim time DEFAULT NULL,
  avaliacao decimal(10,0) DEFAULT NULL,
  nao_compareceu tinyint(1) DEFAULT NULL,
  data date DEFAULT NULL,
  nome_barbearia varchar(80) DEFAULT NULL,
  status varchar(45) DEFAULT NULL,
  nome_cliente varchar(50) DEFAULT NULL,
  PRIMARY KEY (id_fila)
) ENGINE=MyISAM AUTO_INCREMENT=132571 DEFAULT CHARSET=utf8;


CREATE TABLE imagem (
  id_imagem int(11) NOT NULL AUTO_INCREMENT,
  caminho varchar(150) NOT NULL,
  id_barbearia varchar(50) NOT NULL,
  posicao varchar(30) DEFAULT NULL,
  PRIMARY KEY (id_imagem)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

CREATE TABLE servico (
  id_servico varchar(50) NOT NULL,
  id_barbearia varchar(50) NOT NULL,
  tipo varchar(30) NOT NULL,
  servico varchar(30) NOT NULL,
  tempo time DEFAULT NULL,
  preco decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (id_servico)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

CREATE TABLE usuario (
  id_usuario varchar(50) NOT NULL,
  login varchar(30) NOT NULL,
  senha varchar(30) NOT NULL,
  permissao tinyint(4) DEFAULT NULL,
  nome varchar(50) DEFAULT NULL,
  token varchar(50) DEFAULT NULL,
  PRIMARY KEY (id_usuario),
  UNIQUE KEY login_UNIQUE (login),
  UNIQUE KEY token_UNIQUE (token)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--- BARBEARIAS ---

INSERT INTO barbearia (id_barbearia, nome_barbearia, num_endereco, bairro_endereco, cidade_endereco, estado_endereco, cnpj, sobre, email, inicio_funcionamento, fim_funcionamento, informacao_adicional, logradouro_endereco, contato_1, contato_2, id_dono, cep, distancia, avaliacao, maps_src_embed) 
VALUES 
('asd1asd3154', 'Barberia Italiana Bergamo', '999', 'Dionísio Torres', 'Fortaleza', 'CE', '5420056354569', 'Barbearia do clássico ao moderno. Agende seu horário e venha se surpreender.', 'barbearia_italiana@teste.com', '08:00', '18:00', 'Sem informações.', 'Av. Senador Virgílio Távora', '(85) 98000-5556', '(85) 99000-5555', 'jkasdhhjsd545123', '60170-251', '2.3', '5', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.293236304745!2d-38.498410684946975!3d-3.74617244431284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74885e829f3d5%3A0x9b86080e0bb45a33!2sAv.+Senador+Virg%C3%ADlio+T%C3%A1vora+-+Dion%C3%ADsio+Torres%2C+Fortaleza+-+CE!5e0!3m2!1sen!2sbr!4v1559252837471!5m2!1sen!2sbr'),
('asd1asd3155', 'Os Marujos Barbearia', '811', 'Aldeota', 'Fortaleza', 'CE', '5520056550569', 'Profissionais preparados para atender à sua expectativa. Agende seu horário e venha se surpreender com a qualidade dos nosso atendimento.', 'osmarujos@teste.com', '08:00', '18:00', 'Sem informações.', 'Rua Professor Dias da Rocha', '(85) 98000-5556', '(85) 99000-5555', 'jkasdhhjsd545124', '60170-285', '6.1', '3', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15925.291906960323!2d-38.492965!3d-3.7396300000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7488662029957%3A0x8ac58c30adce018!2sRua+Professor+Dias+da+Rocha%2C+Fortaleza+-+CE!5e0!3m2!1sen!2sbr!4v1559254344905!5m2!1sen!2sbr'),
('asd1asd3156', 'Barbearia João Meleiro', '1167', 'Aldeota', 'Fortaleza', 'CE', '5820052455569', 'Barbearia voltada para o público masculino, ambiente retrô, conforto e serviço de qualidade...', 'barbearia_joao@teste.com', '08:00', '18:00', 'Sem informações.', 'R. Monsenhor Catão', '(85) 98000-5556', '(85) 99000-5555', 'jkasdhhjsd545125', '60175-000', '8.7', '4', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3136605719674!2d-38.4937184849469!3d-3.741680644288649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7489afd92fc33%3A0xd132e6739efbaf7f!2sR.+Monsenhor+Cat%C3%A3o+-+Aldeota%2C+Fortaleza+-+CE!5e0!3m2!1sen!2sbr!4v1559253003125!5m2!1sen!2sbr'),
('asd1asd3157', 'Barbearia Caravela', '300', 'Varjota', 'Fortaleza', 'CE', '5920057458569', 'Local Recomendado Para O Público Masculino. Profissionais Extremamente Capacitados Para Atender Os Clientes Com Excelencia.', 'caravela@teste.com', '08:00', '18:00', 'Sem informações.', 'Av. Dom Luís', '(85) 98000-5556', '(85) 99000-5555', 'jkasdhhjsd545126', '60160-230', '1.2', '4', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3525814392333!2d-38.501141884946954!3d-3.733106044242522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74863b6aed93b%3A0x50bd7cbc9358b310!2sAv.+Dom+Lu%C3%ADs%2C+300+-+Aldeota%2C+Fortaleza+-+CE%2C+60160-230!5e0!3m2!1sen!2sbr!4v1559254275875!5m2!1sen!2sbr'),
('asd1asd3158', 'Barbearia do Beto', '603', 'Dionísio Torres', 'Fortaleza', 'CE', '5220056456569', 'Além de serviços de barbearia, contamos com tatuadores experientes e uma variada carta de cervejas especiais.', 'barbearia_beto@teste.com', '08:00', '18:00', 'Sem informações.', 'R. Henriqueta Galeno', '(85) 98000-5556', '(85) 99000-5555', 'jkasdhhjsd545127', '60135-420', '9', '5','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.291824463438!2d-38.49724138494696!3d-3.74648274431453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7489a7ba0134b%3A0x4f9983b64f9321da!2sRua+Professor+Dias+da+Rocha%2C+2023+-+Dion%C3%ADsio+Torres%2C+Fortaleza+-+CE%2C+60170-311!5e0!3m2!1sen!2sbr!4v1559254197892!5m2!1sen!2sbr');

--- SERVIÇOS ---

INSERT INTO servico (id_servico, id_barbearia, tipo, servico, tempo, preco) VALUES ('1', 'asd1asd3154', 'Combo', 'Corte + Barba', '00:40:00', '25');
INSERT INTO servico (id_servico, id_barbearia, tipo, servico, tempo, preco) VALUES ('2', 'asd1asd3154', 'Combo', 'Corte + Progressiva', '00:50:00', '50');
INSERT INTO servico (id_servico, id_barbearia, tipo, servico, tempo, preco) VALUES ('3', 'asd1asd3154', 'Cabelo', 'Corte', '00:30:00', '30');
INSERT INTO servico (id_servico, id_barbearia, tipo, servico, tempo, preco) VALUES ('4', 'asd1asd3154', 'Cabelo', 'Pezinho', '00:20:00', '20');
INSERT INTO servico (id_servico, id_barbearia, tipo, servico, tempo, preco) VALUES ('5', 'asd1asd3154', 'Barba', 'Barboterapia', '00:40:00', '30');

--- IMAGEM DA LOGO ---

INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('1', '/barbearia/public/logo_barbearia/Logo1.png', 'asd1asd3154', 'logo');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('2', '/barbearia/public/logo_barbearia/Logo2.png', 'asd1asd3155', 'logo');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('3', '/barbearia/public/logo_barbearia/Logo3.png', 'asd1asd3156', 'logo');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('4', '/barbearia/public/logo_barbearia/Logo4.png', 'asd1asd3157', 'logo');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('5', '/barbearia/public/logo_barbearia/Logo5.jpg', 'asd1asd3158', 'logo');

--- IMAGENS DO SLIDE ---

INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('6', '/barbearia/public/slide_barbearia/a1.jpg', 'asd1asd3154', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('7', '/barbearia/public/slide_barbearia/a2.jpg', 'asd1asd3154', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('8', '/barbearia/public/slide_barbearia/a3.jpg', 'asd1asd3154', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('9', '/barbearia/public/slide_barbearia/b1.jpg', 'asd1asd3155', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('10', '/barbearia/public/slide_barbearia/b2.jpg', 'asd1asd3155', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('11', '/barbearia/public/slide_barbearia/b3.jpg', 'asd1asd3155', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('12', '/barbearia/public/slide_barbearia/c1.jpg', 'asd1asd3156', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('13', '/barbearia/public/slide_barbearia/c2.jpg', 'asd1asd3156', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('14', '/barbearia/public/slide_barbearia/c3.jpg', 'asd1asd3156', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('15', '/barbearia/public/slide_barbearia/d1.jpg', 'asd1asd3157', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('16', '/barbearia/public/slide_barbearia/d2.jpg', 'asd1asd3157', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('17', '/barbearia/public/slide_barbearia/d3.jpg', 'asd1asd3157', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('18', '/barbearia/public/slide_barbearia/e1.jpg', 'asd1asd3158', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('19', '/barbearia/public/slide_barbearia/e2.jpg', 'asd1asd3158', 'slide');
INSERT INTO imagem (id_imagem, caminho, id_barbearia, posicao) VALUES ('20', '/barbearia/public/slide_barbearia/e3.jpg', 'asd1asd3158', 'slide');

--- USUÁRIOS ---

INSERT INTO usuario (id_usuario, login, senha, permissao, nome, token) VALUES ('jkasdhhjsd545123', 'barbearia_italiana@teste.com', '12345', '1', 'Teste', '1');
INSERT INTO usuario (id_usuario, login, senha, permissao, nome, token) VALUES ('jkasdhhjsd545124', 'osmarujos@teste.com', '12345', '1', 'Teste', '2');
INSERT INTO usuario (id_usuario, login, senha, permissao, nome, token) VALUES ('jkasdhhjsd545125', 'barbearia_joao@teste.com', '12345', '1', 'Teste', '3');
INSERT INTO usuario (id_usuario, login, senha, permissao, nome, token) VALUES ('jkasdhhjsd545126', 'caravela@teste.com', '12345', '1', 'Teste', '4');
INSERT INTO usuario (id_usuario, login, senha, permissao, nome, token) VALUES ('jkasdhhjsd545127', 'barbearia_beto@teste.com', '12345', '1', 'Teste', '5');

INSERT INTO usuario 
(id_usuario, login, senha, permissao, nome, token) 
VALUES 
('jkasdhhjsd545128', 'eduardo@edu.com', '123', '0', 'Eduardo Moreira', '6');

INSERT INTO usuario 
(id_usuario, login, senha, permissao, nome, token) 
VALUES 
('jkasdhhjsd545129', 'carlos.silva@cads.com', '123', '0', 'Carlos Silva', '7');