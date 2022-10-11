-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema atividade_produto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema atividade_produto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `atividade_produto` DEFAULT CHARACTER SET utf8 ;
USE `atividade_produto` ;

-- -----------------------------------------------------
-- Table `atividade_produto`.`Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `atividade_produto`.`Produto` (
  `idProduto` INT NOT NULL,
  `Prod_nome` VARCHAR(45) NULL,
  `Prod_Qauantidade` INT NULL,
  `Prod_unidade` VARCHAR(45) NULL,
  `Prod_valor` DECIMAL(45) NULL,
  `Prod_descricao` VARCHAR(45) NULL,
  `Prod_localizacao` VARCHAR(45) NULL,
  PRIMARY KEY (`idProduto`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
