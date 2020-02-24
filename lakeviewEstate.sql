-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema lakeviewestate
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lakeviewestate
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lakeviewestate` DEFAULT CHARACTER SET utf8 ;
USE `lakeviewestate` ;

-- -----------------------------------------------------
-- Table `lakeviewestate`.`role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewestate`.`role` (
  `role_id` INT(11) NOT NULL AUTO_INCREMENT,
  `rolename` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`role_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `lakeviewestate`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewestate`.`events` (
  `event_id` INT(11) NOT NULL AUTO_INCREMENT,
  `eventdescription` BLOB NOT NULL,
  `eventdate` DATETIME NOT NULL,
  `eventhost` INT(11) NOT NULL,
  PRIMARY KEY (`event_id`),
  INDEX `eventhost_idx` (`eventhost` ASC),
  CONSTRAINT `eventhost`
    FOREIGN KEY (`eventhost`)
    REFERENCES `lakeviewestate`.`role` (`role_id`)
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `lakeviewestate`.`street`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewestate`.`street` (
  `house_street_id` INT(11) NOT NULL AUTO_INCREMENT,
  `street_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`house_street_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `lakeviewestate`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewestate`.`users` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `username` VARCHAR(50) NULL DEFAULT NULL,
  `dob` DATETIME NOT NULL,
  `email` VARCHAR(30) NULL DEFAULT NULL,
  `phonenumber` VARCHAR(45) NOT NULL,
  `password` VARCHAR(10) NULL DEFAULT NULL,
  `gender` ENUM('M', 'F') NOT NULL,
  `aboutme` BLOB NULL DEFAULT NULL,
  `profilepix` VARCHAR(30) NULL DEFAULT NULL,
  `role` INT(11) NOT NULL,
  `address` INT(11) NOT NULL,
  `userstatus` VARCHAR(45) NOT NULL DEFAULT 'inactive',
  PRIMARY KEY (`user_id`),
  INDEX `role_idx` (`role` ASC),
  INDEX `address_idx` (`address` ASC),
  CONSTRAINT `address`
    FOREIGN KEY (`address`)
    REFERENCES `lakeviewestate`.`street` (`house_street_id`)
    ON UPDATE CASCADE,
  CONSTRAINT `role`
    FOREIGN KEY (`role`)
    REFERENCES `lakeviewestate`.`role` (`role_id`)
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `lakeviewestate`.`houses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewestate`.`houses` (
  `house_type_id` INT(11) NOT NULL AUTO_INCREMENT,
  `housenumber` VARCHAR(45) NOT NULL,
  `street_id` INT(11) NOT NULL,
  `buildyear` DATETIME NULL DEFAULT NULL,
  `house_owner_id` INT(11) NOT NULL,
  `housetype` INT(11) NOT NULL,
  `housepix` VARCHAR(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`house_type_id`),
  INDEX `house_street_id_idx` (`street_id` ASC),
  INDEX `house_owner_id_idx` (`house_owner_id` ASC),
  CONSTRAINT `house_owner_id`
    FOREIGN KEY (`house_owner_id`)
    REFERENCES `lakeviewestate`.`users` (`user_id`)
    ON UPDATE CASCADE,
  CONSTRAINT `house_street_id`
    FOREIGN KEY (`street_id`)
    REFERENCES `lakeviewestate`.`street` (`house_street_id`)
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `lakeviewestate`.`security_dues`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewestate`.`security_dues` (
  `security_dues_id` INT(11) NOT NULL AUTO_INCREMENT,
  `payment_date` DATETIME NOT NULL,
  `amount` VARCHAR(5) NOT NULL,
  `year` DATETIME NOT NULL,
  `user` INT(11) NOT NULL,
  PRIMARY KEY (`security_dues_id`),
  INDEX `user_idx` (`user` ASC),
  CONSTRAINT `user`
    FOREIGN KEY (`user`)
    REFERENCES `lakeviewestate`.`users` (`user_id`)
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `lakeviewestate`.`visitors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewestate`.`visitors` (
  `visitor_id` INT(11) NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phonenumber` VARCHAR(45) NOT NULL,
  `gender` ENUM('M', 'F') NOT NULL,
  `host` INT(11) NOT NULL,
  PRIMARY KEY (`visitor_id`),
  INDEX `host_idx` (`host` ASC),
  CONSTRAINT `host`
    FOREIGN KEY (`host`)
    REFERENCES `lakeviewestate`.`users` (`user_id`)
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
