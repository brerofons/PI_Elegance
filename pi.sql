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
VALUES ('Anabela de Couro Basica','Marrom',120.99,'ANABELA'),('Anabela de couro rosa','Rosa',155.99,'ANABELA'),('Anabela aberta laranja','Laranja',237.99,'ANABELA'),('Anabela listrada Laranja','Laranja',185.99,'ANABELA'),('Anabela cravejada Lilas','Lilas',209.99,'ANABELA'),('Anabela nude','Beje',110.99,'ANABELA'),('Anabela Vinho','Vinho',211.99,'ANABELA'),('Anabela Lassada Caramelo','Caramelo',195.99,'ANABELA'),
('Sandalia Grossa Beje','Beje',120.99,'SANDALIA'),('Sandalia de Couro Marrom','Marrom',155.99,'SANDALIA'),('Sandalia Cravejada Fina Azul','Azul',237.99,'SANDALIA'),('Sandalia Lilas','Lilas',185.99,'SANDALIA'),('Chinelo Branco','Branco',100.99,'SANDALIA'),('Sandalia Grossa Laranja','Laranja',90.99,'SANDALIA'),('Sandalia Cravejada Fina Beje','Beje',291.99,'SANDALIA'),('Sandalia Cravejada Grossa','Beje',173.99,'SANDALIA'),
('Bota Rosa Cano Longo','Rosa',222.99,'BOTA'),('Bota Preta sem cadarço','Preta',115.99,'BOTA'),('Bota de Couro Branca','Branca',237.99,'BOTA'),('Bota de Couro Preta','Preta',185.99,'BOTA'),('Bota de Couro Preta Zipper','Preta',211.99,'BOTA'),('Bota de Couro Vinho','Vinho',199.99,'BOTA'),('Bota Bico Fino Preta Zipper','Preta',218.99,'BOTA'),('Bota Amarela Cano Longo','Amarela',323.99,'BOTA'),
('Sapatilha','Amarela',173.99,'SAPATILHA'),('Sapatilha','Amarela',173.99,'SAPATILHA'),('Sapatilha','Amarela',173.99,'SAPATILHA'),('Sapatilha','Amarela',173.99,'SAPATILHA'),('Sapatilha','Amarela',173.99,'SAPATILHA'),('Sapatilha','Amarela',173.99,'SAPATILHA'),('Sapatilha','Amarela',173.99,'SAPATILHA'),('Sapatilha','Amarela',173.99,'SAPATILHA'),
;