SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `fyp11` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `fyp11` ;

-- -----------------------------------------------------
-- Table `fyp11`.`data`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `fyp11`.`data` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `timestamp` VARCHAR(45) NULL ,
  `gw_id` VARCHAR(45) NULL ,
  `location_id` VARCHAR(45) NULL ,
  `temperature` FLOAT NULL ,
  `humidity` FLOAT NULL ,
  `light` INT NULL ,
  `motion` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
