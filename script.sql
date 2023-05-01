-- Criar tabela users
CREATE TABLE users (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(75) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL,
  cpf VARCHAR(50),
  phone VARCHAR(50),
  avatar VARCHAR(255),
  token VARCHAR(255)
);

-- Criar tabela logs
CREATE TABLE logs (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_id INT NOT NULL,
  type VARCHAR(75) NOT NULL,
  description VARCHAR(255) NOT NULL,
  created_at DATETIME NOT NULL
);

-- Criar tabela courses
CREATE TABLE courses (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(75) NOT NULL,
  logo VARCHAR(255) NOT NULL
);

-- Criar tabela modules
CREATE TABLE modules (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(75) NOT NULL,
  course_id INT NOT NULL
);

-- Criar tabela lessons
CREATE TABLE lessons (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(75) NOT NULL,
  order_number INT NOT NULL,
  module_id int NOT NULL,
  course_id int NOT NULL
);