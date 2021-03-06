SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE serieQuiz;

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `questions` (`id`, `text`) VALUES
(1, 'De manhã, você:'),
(2, 'Indo para o trabalho você encontra uma senhora idosa caída na rua.'),
(3, 'Chega no prédio e o elevador está cheio.'),
(4, 'Você chega no trabalho e as convenções sociais te obrigam a puxar assunto.'),
(5, 'A pauta pegou o dia todo, mas você está indo para casa.');

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `series` (`id`, `title`, `description`, `image`) VALUES
(1, 'House of Cards', 'Você é House of Cards: ataca o problema com método e faz de tudo para resolver a situação.', 'images/house.gif'),
(2, 'Game of Thrones', 'Você é Game of Thrones: não tem muita delicadeza nas ações, mas resolve o problema de forma prática.', 'images/got.gif'),
(3, 'Lost', 'Você é Lost: faz as coisas sem ter total certeza se é o caminho certo ou se faz sentido, mas no final dá tudo certo.', 'images/lost.gif'),
(4, 'Breaking Bad', 'Você é Breaking Bad: pra fazer acontecer você toma a liderança, mas sempre contando com seus parceiros.', 'images/breakingbad.gif'),
(5, 'Silicon Valley', 'Você é Silicon Valley: vive a tecnologia o tempo todo e faz disso um mantra para cada situação no dia.', 'images/valley.gif');

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `serie` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (question) REFERENCES questions(id),
  FOREIGN KEY (serie) REFERENCES series(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `answers` (`id`, `question`, `serie`, `text`) VALUES
(1, 1, 1, 'Acorda cedo e come frutas cortadas metodicamente.'),
(2, 1, 2, 'Sai da cama com o despertador e se prepara para a batalha da semana.'),
(3, 1, 3, 'Só consegue lembrar do seu nome depois do café'),
(4, 1, 4, 'Levanta e faz café pra todos da casa.'),
(5, 1, 5, 'Passa o café e conserta um erro no HTML.'),
(6, 2, 1, 'Ela vai atrapalhar seu horário. Oculte o corpo.'),
(7, 2, 2, 'Levanta a senhora e jura protegê-la com sua vida.'),
(8, 2, 3, 'Ajuda-a, mas questiona sua real identidade.'),
(9, 2, 4, 'Oferece para caminharem juntos até um destino em comum.'),
(10, 2, 5, 'Testa se ela roda bem no Firefox. Não roda.'),
(11, 3, 1, 'Convence parte das pessoas a esperarem o próximo.'),
(12, 3, 2, 'Ignora as pessoas no elevador e entra de qualquer forma.'),
(13, 3, 3, 'Você questiona a realidade, as coisas e tudo mais. Sobe de escada.'),
(14, 3, 4, 'Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.'),
(15, 3, 5, 'Cria um app que mostra a lotação do elevador. Vende o app e fica milionário.'),
(16, 4, 1, 'Fala sobre a política, eleições, como tudo é um absurdo.'),
(17, 4, 2, 'Larga uma frase polêmica e vê uma pequena guerra se formar.'),
(18, 4, 3, 'Puxa um assunto e te lembram que já foi discutido semana passada.'),
(19, 4, 4, 'Sugere que os colegas trabalhem na ideia de um novo projeto.'),
(20, 4, 5, 'Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP.'),
(21, 5, 1, 'Vou chamar aqui o meu Uber.'),
(22, 5, 2, 'Pegarei o bus junto com o resto do povo.'),
(23, 5, 3, 'No ponto de ônibus mais uma vez, espero não errar a linha de novo.'),
(24, 5, 4, 'Vou de carro, mas ofereço uma carona para os colegas.'),
(25, 5, 5, 'Acho que descobri uma forma de fazer aquela senhora rodar no Firefox.');