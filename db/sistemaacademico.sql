-- MySQL Script generated by MySQL Workbench
-- Qua 04 Mai 2016 08:21:19 BRT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `academico` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `academico` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`cursos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`cursos` ;

CREATE TABLE IF NOT EXISTS `mydb`.`cursos` (
  `curs_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `curs_nome` VARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`curs_id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`disciplinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`disciplinas` ;

CREATE TABLE IF NOT EXISTS `mydb`.`disciplinas` (
  `disc_codigo` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `disc_nome` VARCHAR(50) NOT NULL COMMENT '',
  `disc_ementa` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`disc_codigo`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estudantes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`estudantes` ;

CREATE TABLE IF NOT EXISTS `mydb`.`estudantes` (
  `estu_matricula` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `estu_nome` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`estu_matricula`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`matriz_cursos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`matriz_cursos` ;

CREATE TABLE IF NOT EXISTS `mydb`.`matriz_cursos` (
  `macu_id` VARCHAR(45) NOT NULL COMMENT '',
  `macu_curs_id` INT NOT NULL COMMENT '',
  `macu_disc_codigo` INT NOT NULL COMMENT '',
  PRIMARY KEY (`macu_curs_id`, `macu_disc_codigo`, `macu_id`)  COMMENT '',
  INDEX `fk_cursos_has_disciplinas_disciplinas1_idx` (`macu_disc_codigo` ASC)  COMMENT '',
  INDEX `fk_cursos_has_disciplinas_cursos_idx` (`macu_curs_id` ASC)  COMMENT '',
  CONSTRAINT `fk_cursos_has_disciplinas_cursos`
    FOREIGN KEY (`macu_curs_id`)
    REFERENCES `mydb`.`cursos` (`curs_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursos_has_disciplinas_disciplinas1`
    FOREIGN KEY (`macu_disc_codigo`)
    REFERENCES `mydb`.`disciplinas` (`disc_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`matriculas_por_curso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`matriculas_por_curso` ;

CREATE TABLE IF NOT EXISTS `mydb`.`matriculas_por_curso` (
  `mcur_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `mcur_dt_inicial` DATE NOT NULL COMMENT '',
  `mcur_dt_final` DATE NOT NULL COMMENT '',
  `mcur_estu_matricula` INT NOT NULL COMMENT '',
  `mcur_curs_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`mcur_id`, `mcur_estu_matricula`, `mcur_curs_id`)  COMMENT '',
  INDEX `fk_matriculas_por_curso_estudantes1_idx` (`mcur_estu_matricula` ASC)  COMMENT '',
  INDEX `fk_matriculas_por_curso_cursos1_idx` (`mcur_curs_id` ASC)  COMMENT '',
  CONSTRAINT `fk_matriculas_por_curso_estudantes1`
    FOREIGN KEY (`mcur_estu_matricula`)
    REFERENCES `mydb`.`estudantes` (`estu_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matriculas_por_curso_cursos1`
    FOREIGN KEY (`mcur_curs_id`)
    REFERENCES `mydb`.`cursos` (`curs_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`matricula_por_disciplina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`matricula_por_disciplina` ;

CREATE TABLE IF NOT EXISTS `mydb`.`matricula_por_disciplina` (
  `madi_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `madi_nota` FLOAT NOT NULL COMMENT '',
  `madi_aprovado` TINYINT(1) NOT NULL COMMENT '',
  `madi_dt_inicial` DATE NOT NULL COMMENT '',
  `madi_dt_final` DATE NOT NULL COMMENT '',
  `madi_estu_matricula` INT NOT NULL COMMENT '',
  `madi_disc_codigo` INT NOT NULL COMMENT '',
  PRIMARY KEY (`madi_id`, `madi_estu_matricula`, `madi_disc_codigo`)  COMMENT '',
  INDEX `fk_matricula_por_disciplina_estudantes1_idx` (`madi_estu_matricula` ASC)  COMMENT '',
  INDEX `fk_matricula_por_disciplina_disciplinas1_idx` (`madi_disc_codigo` ASC)  COMMENT '',
  CONSTRAINT `fk_matricula_por_disciplina_estudantes1`
    FOREIGN KEY (`madi_estu_matricula`)
    REFERENCES `mydb`.`estudantes` (`estu_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matricula_por_disciplina_disciplinas1`
    FOREIGN KEY (`madi_disc_codigo`)
    REFERENCES `mydb`.`disciplinas` (`disc_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`professor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`professor` ;

CREATE TABLE IF NOT EXISTS `mydb`.`professor` (
  `prof_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  PRIMARY KEY (`prof_id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`responsaveis`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`responsaveis` ;

CREATE TABLE IF NOT EXISTS `mydb`.`responsaveis` (
  `respo_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `respo_ano` DATE NOT NULL COMMENT '',
  `respo_semestre` INT NOT NULL COMMENT '',
  `respo_disciplinas_disc_codigo` INT NOT NULL COMMENT '',
  `respo_prof_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`respo_id`, `respo_disciplinas_disc_codigo`, `respo_prof_id`)  COMMENT '',
  INDEX `fk_responsaveis_disciplinas1_idx` (`respo_disciplinas_disc_codigo` ASC)  COMMENT '',
  INDEX `fk_responsaveis_professor1_idx` (`respo_prof_id` ASC)  COMMENT '',
  CONSTRAINT `fk_responsaveis_disciplinas1`
    FOREIGN KEY (`respo_disciplinas_disc_codigo`)
    REFERENCES `mydb`.`disciplinas` (`disc_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responsaveis_professor1`
    FOREIGN KEY (`respo_prof_id`)
    REFERENCES `mydb`.`professor` (`prof_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `mydb`.`usuarios` (
  `usua_id` INT NOT NULL COMMENT '',
  `usua_nome` VARCHAR(250) NULL COMMENT '',
  `usua_email` VARCHAR(100) NULL COMMENT '',
  `usua_senha` VARCHAR(100) NULL COMMENT '',
  `usua_telefone` VARCHAR(45) NULL COMMENT '',
  `usua_status` VARCHAR(45) NULL COMMENT '',
  `usua_tipo` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`usua_id`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
