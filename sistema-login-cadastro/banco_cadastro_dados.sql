-- =============================================
-- Banco de dados: banco_cadastro
-- Sistema de Login e Cadastro de Usuários
-- =============================================

CREATE DATABASE IF NOT EXISTS banco_cadastro;
USE banco_cadastro;

-- Estrutura da tabela `dados`
DROP TABLE IF EXISTS `dados`;

CREATE TABLE `dados` (
  `nome`     VARCHAR(150) NOT NULL,
  `email`    VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(15)  NOT NULL,
  `cpf`      CHAR(11)     NOT NULL,
  `senha`    VARCHAR(255) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- =============================================
-- Dado de exemplo para testes
-- Senha original: teste123
-- =============================================
INSERT INTO `dados` VALUES (
  'Usuário Teste',
  'teste@email.com',
  '(11) 91111-2222',
  '00000000000',
  '$2y$10$abcdefghijklmnopqrstuuVGZzKlMnOpQrStUvWxYz1234567890ab'
);
