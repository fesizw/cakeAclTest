/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.3.12-MariaDB-1:10.3.12+maria~xenial : Database - acl
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`acl` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `acl`;

/*Table structure for table `capacidade_civils` */

DROP TABLE IF EXISTS `capacidade_civils`;

CREATE TABLE `capacidade_civils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_capacidade` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CÓDIGO',
  `name` varchar(255) DEFAULT NULL COMMENT 'NomeCliente',
  `filiacao_materna` varchar(255) DEFAULT NULL COMMENT 'FiliaçãoMaterna',
  `nacionalidade` varchar(50) DEFAULT NULL COMMENT 'Nacionalidade',
  `naturalidade` varchar(80) DEFAULT NULL COMMENT 'Natural de',
  `rg` varchar(50) DEFAULT NULL COMMENT 'RG',
  `orgao_exp_rg` varchar(50) DEFAULT NULL COMMENT 'Órgão exp RG',
  `cpf` varchar(20) DEFAULT NULL COMMENT 'CPF/MF',
  `cnpj` varchar(20) DEFAULT NULL COMMENT 'CNPJ/MF',
  `ctps` varchar(50) DEFAULT NULL COMMENT 'CTPS',
  `pis_pasep` varchar(50) DEFAULT NULL COMMENT 'PIS/PASEP',
  `data_nascimento` date DEFAULT NULL COMMENT 'DataNascimento',
  `origem` varchar(50) DEFAULT NULL COMMENT 'Origem2',
  `observacao` text DEFAULT NULL COMMENT 'Observação',
  `cad_senha` varchar(255) DEFAULT NULL COMMENT 'CadSenha',
  `foto` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL COMMENT 'CadastroGeral',
  `modified` datetime DEFAULT NULL COMMENT 'dt_modificacao',
  `tipo_cliente_id` int(11) NOT NULL COMMENT 'id_tipo_cliente',
  `capacidade_civil_id` int(11) NOT NULL COMMENT 'CapacidadeCivil (usando apenas nome)',
  `estado_civil_id` int(11) NOT NULL COMMENT 'CodEstCivil',
  `user_id` int(11) NOT NULL COMMENT 'Quem Lançou',
  `profissao_id` int(11) NOT NULL COMMENT 'CodProf',
  `sexo_id` int(11) NOT NULL COMMENT 'CodSexo',
  `unidade_id` int(11) NOT NULL COMMENT 'Unidade (usando apenas o nome)',
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `emails` */

DROP TABLE IF EXISTS `emails`;

CREATE TABLE `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'idemail',
  `email` varchar(255) NOT NULL COMMENT 'email',
  `descricao` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT 'situacao',
  `created` datetime DEFAULT NULL COMMENT 'datacadastro',
  `modified` datetime DEFAULT NULL,
  `cliente_id` int(11) NOT NULL COMMENT 'codcli',
  `user_id` int(11) NOT NULL COMMENT 'quemlancou (usa nome diretamente)',
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `empresas` */

DROP TABLE IF EXISTS `empresas`;

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `enderecos` */

DROP TABLE IF EXISTS `enderecos`;

CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'idEndereco',
  `logradouro` varchar(255) NOT NULL COMMENT 'endereco',
  `numero` varchar(50) DEFAULT NULL COMMENT 'numero',
  `bairro` varchar(100) DEFAULT NULL COMMENT 'bairro',
  `cidade` varchar(60) DEFAULT NULL COMMENT 'cidade',
  `estado` char(2) NOT NULL COMMENT 'estado',
  `cep` int(9) DEFAULT NULL COMMENT 'cep',
  `complemento` varchar(60) DEFAULT NULL COMMENT 'complemento',
  `observacao` text DEFAULT NULL COMMENT 'obs',
  `comprovante_residencia` tinyint(1) NOT NULL COMMENT 'comprecli',
  `status` tinyint(1) NOT NULL COMMENT 'exibir, situacao',
  `created` datetime DEFAULT NULL COMMENT 'dataCadastro',
  `modified` datetime DEFAULT NULL,
  `tipo_endereco_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL COMMENT 'codcli',
  `user_id` int(11) NOT NULL COMMENT 'quemlancou (so nome)',
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `estado_civils` */

DROP TABLE IF EXISTS `estado_civils`;

CREATE TABLE `estado_civils` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_estado_civil` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `grupos` */

DROP TABLE IF EXISTS `grupos`;

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `i18n` */

DROP TABLE IF EXISTS `i18n`;

CREATE TABLE `i18n` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  KEY `I18N_FIELD` (`model`,`foreign_key`,`field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `profissaos` */

DROP TABLE IF EXISTS `profissaos`;

CREATE TABLE `profissaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `representantes` */

DROP TABLE IF EXISTS `representantes`;

CREATE TABLE `representantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(80) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `representante_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` char(40) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data` blob DEFAULT NULL,
  `expires` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `sexos` */

DROP TABLE IF EXISTS `sexos`;

CREATE TABLE `sexos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `telefones` */

DROP TABLE IF EXISTS `telefones`;

CREATE TABLE `telefones` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'idTelefone',
  `status` tinyint(1) NOT NULL COMMENT 'situacao',
  `numero` varchar(14) NOT NULL COMMENT 'numero',
  `observacao` text DEFAULT NULL COMMENT 'obs',
  `created` datetime DEFAULT NULL COMMENT 'datacadastro',
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'quemlancou',
  `cliente_id` int(11) DEFAULT NULL COMMENT 'codcli',
  `unidade_id` int(11) DEFAULT NULL,
  `empresa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `tipo_clientes` */

DROP TABLE IF EXISTS `tipo_clientes`;

CREATE TABLE `tipo_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Table structure for table `tipo_enderecos` */

DROP TABLE IF EXISTS `tipo_enderecos`;

CREATE TABLE `tipo_enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `descricao` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `unidades` */

DROP TABLE IF EXISTS `unidades`;

CREATE TABLE `unidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `login` varchar(60) NOT NULL,
  `senha` char(60) NOT NULL,
  `foto` char(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `grupo_id` int(11) NOT NULL,
  `unidade_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
