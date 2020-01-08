# Serie Quiz
![Preview](https://i.imgur.com/vkRKQJK.png)

## Demo

Exemplo de funcionamento para usuário. https://peil.dev/serieQuiz/

## Desafio

Você foi contratado por um site de humor geek para programar um quiz que diz que série de TV você é baseado em como você age em algumas situações do dia-a-dia.
O quiz é composto por 5 perguntas com 5 alternativas de resposta cada. Cada alternativa corresponde a uma série.
Baseado nas respostas do usuário, seu algoritmo deverá definir qual série melhor representa o usuário que está respondendo o quiz.

## Intruções para funcionamento

### Requisitos

* PHP >= 7.3.8

### Instalação

* Baixe ou clone o repositório para a pasta desejada;
* Importe o arquivo "database.sql" no seu banco de dados;
* Abra o arquivo "includes/connection.php" no seu editor;
* Edite com as informações do seu banco de dados;
* E já está pronto para a execução;

## Descrição do Design

O Design da solução foi pensando para ser algo simples e intuitivo, composto por apenas 3 telas (Ínicios, Perguntas e Resultado), escolhi fazer uma paleta de cores monocromatica na cor roxa, pois ela representa tecnologia e ciência, quanto a magia e fantasia, temas das séries em questão.

### Ínicio

Uma tela simples com o nome do site acima e o banner de apresentação do quiz, composto pelas 5 séries do quiz.

### Perguntas

É um formulário passo a passo, com cada passo sendo uma pergunta, com seu título e as possíveis respostas e um guia de navegação para avançar e voltar.

### Resultado

Exibe a série vencedora, com o título dela, um gif que representa-a e uma descrição, e abaixo tem botões de compartilhamento e para refazer o teste.
