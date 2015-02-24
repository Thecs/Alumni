SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `alumni`.`member`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `alumni`.`member` (
  `member_id` INT NOT NULL AUTO_INCREMENT ,
  `member_name` VARCHAR(30) NULL ,
  `member_nickname` VARCHAR(20) NULL ,
  `member_address` VARCHAR(100) NULL ,
  `member_tel` INT NULL ,
  `member_date_reg` DATETIME NULL ,
  `member_stu_id` INT NULL ,
  `member_major` VARCHAR(50) NULL ,
  `member_generation` INT NULL ,
  `member_work` VARCHAR(30) NULL ,
  `member_work_address` VARCHAR(100) NULL ,
  PRIMARY KEY (`member_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `alumni`.`authentication`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `alumni`.`authentication` (
  `authentication_id` INT NOT NULL AUTO_INCREMENT ,
  `authentication_user` VARCHAR(20) NULL ,
  `authentication_password` VARCHAR(20) NULL ,
  `member_member_id` INT NOT NULL ,
  PRIMARY KEY (`authentication_id`, `member_member_id`) ,
  INDEX `fk_authentication_member_idx` (`member_member_id` ASC) ,
  CONSTRAINT `fk_authentication_member`
    FOREIGN KEY (`member_member_id` )
    REFERENCES `alumni`.`member` (`member_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `alumni`.`news_ict`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `alumni`.`news_ict` (
  `news_ict_id` INT NOT NULL AUTO_INCREMENT ,
  `news_ict_title` VARCHAR(50) NULL ,
  `news_ict_message` VARCHAR(50) NULL ,
  `news_ict_post_date` DATETIME NULL ,
  `post_by` VARCHAR(30) NULL ,
  `comment_allow` INT NULL ,
  `authentication_authentication_id` INT NOT NULL ,
  `authentication_member_member_id` INT NOT NULL ,
  PRIMARY KEY (`news_ict_id`, `authentication_authentication_id`, `authentication_member_member_id`) ,
  INDEX `fk_news_ict_authentication1_idx` (`authentication_authentication_id` ASC, `authentication_member_member_id` ASC) ,
  CONSTRAINT `fk_news_ict_authentication1`
    FOREIGN KEY (`authentication_authentication_id` , `authentication_member_member_id` )
    REFERENCES `alumni`.`authentication` (`authentication_id` , `member_member_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `alumni`.`job`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `alumni`.`job` (
  `job_id` INT NOT NULL AUTO_INCREMENT ,
  `job_title` VARCHAR(50) NULL ,
  `job_message` VARCHAR(50) NULL ,
  `job_path_doc` VARCHAR(50) NULL ,
  `authentication_authentication_id` INT NOT NULL ,
  `authentication_member_member_id` INT NOT NULL ,
  PRIMARY KEY (`job_id`, `authentication_authentication_id`, `authentication_member_member_id`) ,
  INDEX `fk_job_authentication1_idx` (`authentication_authentication_id` ASC, `authentication_member_member_id` ASC) ,
  CONSTRAINT `fk_job_authentication1`
    FOREIGN KEY (`authentication_authentication_id` , `authentication_member_member_id` )
    REFERENCES `alumni`.`authentication` (`authentication_id` , `member_member_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `alumni`.`activity_image`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `alumni`.`activity_image` (
  `activity_image_id` INT NOT NULL AUTO_INCREMENT ,
  `activity_image_title` VARCHAR(50) NULL ,
  `activity_image_message` VARCHAR(50) NULL ,
  `activity_image_comment_allow` INT NULL ,
  `authentication_authentication_id` INT NOT NULL ,
  `authentication_member_member_id` INT NOT NULL ,
  PRIMARY KEY (`activity_image_id`, `authentication_authentication_id`, `authentication_member_member_id`) ,
  INDEX `fk_activity_image_authentication1_idx` (`authentication_authentication_id` ASC, `authentication_member_member_id` ASC) ,
  CONSTRAINT `fk_activity_image_authentication1`
    FOREIGN KEY (`authentication_authentication_id` , `authentication_member_member_id` )
    REFERENCES `alumni`.`authentication` (`authentication_id` , `member_member_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
