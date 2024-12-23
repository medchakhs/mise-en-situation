CREATE DATABASE mise en situation;


CREATE TABLE role( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(50) 
);
CREATE TABLE USERS( 
    n_ID INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50), 
    email VARCHAR(100), 
    role_id INT, 
    FOREIGN KEY (role_id) REFERENCES role(id) 
);
INSERT INTO role(nome) VALUES ('user');
INSERT INTO role(nome) VALUES ('admin');