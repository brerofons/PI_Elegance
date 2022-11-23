CREATE DATABASE ellegance;
USE ellegance;

CREATE TABLE IF NOT EXISTS tbProd(
id INT NOT NULL PRIMARY KEY auto_increment,
    descricao VARCHAR(120) NOT NULL,
    cor VARCHAR(20) NOT NULL,
    preco FLOAT NOT NULL,
    tipo VARCHAR(20) NOT NULL
);

INSERT INTO tbProd(descricao,cor,preco,tipo)
VALUES ('Anabela de Couro Basica','Marrom',120.99,'ANABELA'),('Anabela de couro rosa','Rosa',155.99,'ANABELA'),('Anabela aberta laranja','Laranja',237.99,'ANABELA'),('Anabela listrada Laranja','Laranja',185.99,'ANABELA'),('Anabela cravejada Lilas','Lilas',209.99,'ANABELA'),('Anabela nude','Bege',110.99,'ANABELA'),('Anabela Vinho','Vinho',211.99,'ANABELA'),('Anabela Lassada Caramelo','Caramelo',195.99,'ANABELA'),
('Sandalia Grossa Bege','Bege',120.99,'SANDALIA'),('Sandalia de Couro Marrom','Marrom',155.99,'SANDALIA'),('Sandalia Cravejada Fina Azul','Azul',237.99,'SANDALIA'),('Sandalia Lilas','Lilas',185.99,'SANDALIA'),('Chinelo Branco','Branco',100.99,'SANDALIA'),('Sandalia Grossa Laranja','Laranja',90.99,'SANDALIA'),('Sandalia Cravejada Fina Bege','Bege',291.99,'SANDALIA'),('Sandalia Cravejada Grossa','Bege',173.99,'SANDALIA'),
('Bota Rosa Cano Longo','Rosa',222.99,'BOTA'),('Bota Preta sem cadarço','Preta',115.99,'BOTA'),('Bota de Couro Branca','Branca',237.99,'BOTA'),('Bota de Couro Preta','Preta',185.99,'BOTA'),('Bota de Couro Preta Zipper','Preta',211.99,'BOTA'),('Bota de Couro Vinho','Vinho',199.99,'BOTA'),('Bota Bico Fino Preta Zipper','Preta',218.99,'BOTA'),('Bota Amarela Cano Longo','Amarela',323.99,'BOTA'),
('Sapatilha de Couro Amarela','Amarela',169.99,'SAPATILHA'),('Sapatilha de Couro Verde','Verde',188.99,'SAPATILHA'),('Sapatilha de Couro Marrom','Marrom',239.99,'SAPATILHA'),('Sapatilha Prateada Escura','prata',289.99,'SAPATILHA'),('Sapatilha Cinza Clara','Cinza',248.99,'SAPATILHA'),('Sapatilha Branca','Branca',310.99,'SAPATILHA'),('Sapatilha Estampa de Onça','Amarela',251.99,'SAPATILHA'),('Estampa de Zebra','Branco',166.99,'SAPATILHA'),
('Tênis Sil preto','Preto',150.99,'TENIS'),('Tênis Benício branco','Branco',185.99,'TENIS'),('Tênis Eloá branco','Branco',137.99,'TENIS'),('Tênis Rafa branco off white','Branco',185.99,'TENIS'),('Tênis bege no couro','Bege',309.99,'TENIS'),('Tênis bege e marrom','Bege',310.99,'TENIS'),('Tênis preto no couro','Preto',231.99,'TENIS'),('Tênis marrom no couro com carmuça','Marron',295.99,'TENIS'),
('Scarpin Laranja','Laranja',320.99,'SCARPIN'),('Scarpin Bege Claro','Bege',155.99,'SCARPIN'),('Scarpin Camurça','Camurça',234.99,'SCARPIN'),('Scarpin Rosa Xadrez','Rosa',200.99,'SCARPIN'),('Scarpin Verde','Verde',209.99,'SCARPIN'),('Scarpin de Couro Bege','Bege',270.99,'SCARPIN'),('Scarpin Cinza Esverdiado','Cinza',181.99,'SCARPIN'),('Scarpin Vinho','Vinho',300.99,'SCARPIN');