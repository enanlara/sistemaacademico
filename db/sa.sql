-- MySQL Script generated by MySQL Workbench
-- Wed 11 May 2016 08:27:08 AM BRT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema academico
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `academico` ;

-- -----------------------------------------------------
-- Schema academico
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `academico` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `academico` ;

-- -----------------------------------------------------
-- Table `academico`.`curso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academico`.`curso` ;

CREATE TABLE IF NOT EXISTS `academico`.`curso` (
  `curs_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `curs_nome` VARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`curs_id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`disciplina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academico`.`disciplina` ;

CREATE TABLE IF NOT EXISTS `academico`.`disciplina` (
  `disc_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `disc_codigo` INT NOT NULL COMMENT '',
  `disc_nome` VARCHAR(50) NOT NULL COMMENT '',
  `disc_ementa` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`disc_id`)  COMMENT '',
  UNIQUE INDEX `disc_id_UNIQUE` (`disc_id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`estudante`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academico`.`estudante` ;

CREATE TABLE IF NOT EXISTS `academico`.`estudante` (
  `estu_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `estu_matricula` INT NOT NULL COMMENT '',
  `estu_nome` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`estu_id`, `estu_matricula`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`matriz_curso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academico`.`matriz_curso` ;

CREATE TABLE IF NOT EXISTS `academico`.`matriz_curso` (
  `macu_id` VARCHAR(45) NOT NULL COMMENT '',
  `macu_curs_id` INT NOT NULL COMMENT '',
  `macu_disc_codigo` INT NOT NULL COMMENT '',
  PRIMARY KEY (`macu_curs_id`, `macu_disc_codigo`, `macu_id`)  COMMENT '',
  INDEX `fk_cursos_has_disciplinas_disciplinas1_idx` (`macu_disc_codigo` ASC)  COMMENT '',
  INDEX `fk_cursos_has_disciplinas_cursos_idx` (`macu_curs_id` ASC)  COMMENT '',
  CONSTRAINT `fk_cursos_has_disciplinas_cursos`
    FOREIGN KEY (`macu_curs_id`)
    REFERENCES `academico`.`curso` (`curs_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursos_has_disciplinas_disciplinas1`
    FOREIGN KEY (`macu_disc_codigo`)
    REFERENCES `academico`.`disciplina` (`disc_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`matricula_por_curso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academico`.`matricula_por_curso` ;

CREATE TABLE IF NOT EXISTS `academico`.`matricula_por_curso` (
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
    REFERENCES `academico`.`estudante` (`estu_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matriculas_por_curso_cursos1`
    FOREIGN KEY (`mcur_curs_id`)
    REFERENCES `academico`.`curso` (`curs_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`matricula_por_disciplina`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academico`.`matricula_por_disciplina` ;

CREATE TABLE IF NOT EXISTS `academico`.`matricula_por_disciplina` (
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
    REFERENCES `academico`.`estudante` (`estu_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matricula_por_disciplina_disciplinas1`
    FOREIGN KEY (`madi_disc_codigo`)
    REFERENCES `academico`.`disciplina` (`disc_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`professor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academico`.`professor` ;

CREATE TABLE IF NOT EXISTS `academico`.`professor` (
  `prof_id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `prof_nome` VARCHAR(200) NULL COMMENT '',
  PRIMARY KEY (`prof_id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`responsavel`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academico`.`responsavel` ;

CREATE TABLE IF NOT EXISTS `academico`.`responsavel` (
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
    REFERENCES `academico`.`disciplina` (`disc_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responsaveis_professor1`
    FOREIGN KEY (`respo_prof_id`)
    REFERENCES `academico`.`professor` (`prof_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `academico`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academico`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `academico`.`usuarios` (
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
