# Sistema de Login e Cadastro

Sistema web de autenticação de usuários desenvolvido com HTML, CSS, JavaScript, PHP e MySQL. O projeto cobre o fluxo completo de cadastro e login, com validações no front-end e armazenamento seguro de dados no back-end.

## Funcionalidades

- Cadastro de usuário com validação de e-mail, telefone e CPF via Regex
- Confirmação de senha antes do envio do formulário
- Senha armazenada com criptografia (`password_hash`)
- Login com verificação segura da senha (`password_verify`)
- Consultas ao banco protegidas contra SQL Injection (Prepared Statements)
- Layout responsivo centralizado com CSS Flexbox

# Tecnologias Utilizadas

| Camada      | Tecnologia          |
|-------------|---------------------|
| Front-end   | HTML5, CSS3, JavaScript |
| Back-end    | PHP                 |
| Banco de dados | MySQL (MariaDB)  |
| Ambiente local | XAMPP            |

# Estrutura do Projeto

```
sistema-login-cadastro/
├── login.html               # Página de login
├── cadastro.html            # Página de cadastro
├── logincadastro.css        # Estilos compartilhados
├── login.php                # Autenticação do usuário
├── cadastro.php             # Inserção de novo usuário no banco
├── conexao.php              # Configuração da conexão com o banco
└── banco_cadastro_dados.sql # Script para criação do banco e tabela
```

# Como Executar Localmente

**Pré-requisitos:** XAMPP (ou equivalente com Apache + PHP + MySQL)

1. Clone ou baixe este repositório
2. Mova a pasta para `C:/xampp/htdocs/` (Windows) ou `/opt/lampp/htdocs/` (Linux)
3. Inicie o Apache e o MySQL pelo painel do XAMPP
4. Abra o **phpMyAdmin** (`http://localhost/phpmyadmin`) e importe o arquivo `banco_cadastro_dados.sql`
5. Acesse no navegador: `http://localhost/sistema-login-cadastro/login.html`

> As credenciais de banco em `conexao.php` (`root` / senha vazia) são padrão do XAMPP em ambiente local. Em produção, utilize variáveis de ambiente.

# Conceitos de Segurança Aplicados

- **`password_hash()`** — a senha nunca é salva em texto puro no banco
- **`password_verify()`** — comparação segura sem expor o hash
- **Prepared Statements** — previnem ataques de SQL Injection
- **Validação no cliente** — Regex para e-mail, telefone e CPF antes do envio

# Observações

Projeto desenvolvido como exercício acadêmico na ETEC Profª Maria Cristina Medeiros — Técnico em Informática para Internet.
