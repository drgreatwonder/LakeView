-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema lakeviewEstate
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lakeviewEstate
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lakeviewEstate` DEFAULT CHARACTER SET utf8 ;
USE `lakeviewEstate` ;

-- -----------------------------------------------------
-- Table `lakeviewEstate`.`street`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewEstate`.`street` (
  `house_street_id` INT NOT NULL AUTO_INCREMENT,
  `street_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`house_street_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lakeviewEstate`.`role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewEstate`.`role` (
  `role_id` INT NOT NULL AUTO_INCREMENT,
  `rolename` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`role_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lakeviewEstate`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewEstate`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `gender` ENUM('M', 'F') NOT NULL,
  `dob` DATETIME NOT NULL,
  `phonenumber` VARCHAR(45) NOT NULL,
  `role` INT NOT NULL,
  `address` INT NOT NULL,
  `userstatus` VARCHAR(45) NOT NULL DEFAULT 'inactive',
  PRIMARY KEY (`user_id`),
  INDEX `role_idx` (`role` ASC),
  INDEX `address_idx` (`address` ASC),
  CONSTRAINT `role`
    FOREIGN KEY (`role`)
    REFERENCES `lakeviewEstate`.`role` (`role_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `address`
    FOREIGN KEY (`address`)
    REFERENCES `lakeviewEstate`.`street` (`house_street_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lakeviewEstate`.`houses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewEstate`.`houses` (
  `house_type_id` INT NOT NULL AUTO_INCREMENT,
  `housenumber` VARCHAR(45) NOT NULL,
  `street_id` INT NOT NULL,
  `house_owner_id` INT NOT NULL,
  PRIMARY KEY (`house_type_id`),
  INDEX `house_street_id_idx` (`street_id` ASC),
  INDEX `house_owner_id_idx` (`house_owner_id` ASC),
  CONSTRAINT `house_street_id`
    FOREIGN KEY (`street_id`)
    REFERENCES `lakeviewEstate`.`street` (`house_street_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `house_owner_id`
    FOREIGN KEY (`house_owner_id`)
    REFERENCES `lakeviewEstate`.`users` (`user_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lakeviewEstate`.`security_dues`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewEstate`.`security_dues` (
  `security_dues_id` INT NOT NULL AUTO_INCREMENT,
  `payment_date` DATETIME NOT NULL,
  `amount` VARCHAR(5) NOT NULL,
  `year` DATETIME NOT NULL,
  `user` INT NOT NULL,
  PRIMARY KEY (`security_dues_id`),
  INDEX `user_idx` (`user` ASC),
  CONSTRAINT `user`
    FOREIGN KEY (`user`)
    REFERENCES `lakeviewEstate`.`users` (`user_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lakeviewEstate`.`visitors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewEstate`.`visitors` (
  `visitor_id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `gender` ENUM('M', 'F') NOT NULL,
  `phonenumber` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `host` INT NOT NULL,
  PRIMARY KEY (`visitor_id`),
  INDEX `host_idx` (`host` ASC),
  CONSTRAINT `host`
    FOREIGN KEY (`host`)
    REFERENCES `lakeviewEstate`.`users` (`user_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lakeviewEstate`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lakeviewEstate`.`events` (
  `event_id` INT NOT NULL AUTO_INCREMENT,
  `eventdescription` BLOB NOT NULL,
  `eventdate` DATETIME NOT NULL,
  `eventhost` INT NOT NULL,
  PRIMARY KEY (`event_id`),
  INDEX `eventhost_idx` (`eventhost` ASC),
  CONSTRAINT `eventhost`
    FOREIGN KEY (`eventhost`)
    REFERENCES `lakeviewEstate`.`role` (`role_id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
