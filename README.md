# App Consultas
## Descrição
Aplicativo web para controlar a agenda de consulta dos pacientes de uma clínica médica. O sistema terá os módulos de:
- Cadastro de médicos
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os médicos
    - Filtro por área do médico
- Cadastro de pacientes
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos os pacientes
    - Opção de pesquisar o paciente por qualquer parte do nome.
- Cadastro de agenda
    - Agendamento de paciente
    - Alteração em uma agendamento
    - Exclusão de um agendamento
    - Listagem de todos os agendamentos

## Tecnologias (Stack)
- Apache (XAMPP)
- PHP
- MariaDB
- HTML
- CSS
- Javascript
- jQuery
- Bootstrap

---
## SQL - Banco de dados
### Criação do banco de dados
```sql
CREATE DATABASE BD_CONSULTORIO CHARACTER SET utf8 COLLATE utf8_general_ci;
```

### Criação da tabela médicos

```sql
CREATE TABLE `bd_consultorio`.`TB_MEDICOS` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nome` VARCHAR(100) NOT NULL ,  
    `telefone` VARCHAR(20) NOT NULL ,  
    `crm` VARCHAR(50) NOT NULL ,  
    `especialidade` VARCHAR(50) NOT NULL ,    PRIMARY KEY  (`id`)
) 
ENGINE = InnoDB;
```
