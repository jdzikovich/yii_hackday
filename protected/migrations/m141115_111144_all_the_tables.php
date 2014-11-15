<?php

class m141115_111144_all_the_tables extends CDbMigration
{
	public function up()
	{
		$this->execute('CREATE  TABLE `company` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(60) NOT NULL ,
  `location` VARCHAR(60) NOT NULL ,
  `metHow` VARCHAR(60) NOT NULL ,
  `website` VARCHAR(60) NOT NULL ,
  `linkedin_id` INT NOT NULL DEFAULT 0,
  `user_id` INT NOT NULL ,
  PRIMARY KEY (`id`) );');
  
		$this->execute('CREATE  TABLE `job` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `company_id` INT NOT NULL ,
  `title` VARCHAR(60) NOT NULL ,
  `source` VARCHAR(60) NOT NULL ,
  `notes` VARCHAR(255) NOT NULL ,
  `user_id` INT NOT NULL ,
  PRIMARY KEY (`id`) );');
  
		$this->execute('CREATE  TABLE `people` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `company_id` INT NOT NULL ,
  `first_name` VARCHAR(60) NOT NULL ,
  `last_name` VARCHAR(60) NOT NULL ,
  `email` VARCHAR(60) NOT NULL ,
  `phone` VARCHAR(60) NOT NULL ,
  `notes` VARCHAR(255) NOT NULL ,
  `user_id` INT NOT NULL ,
  PRIMARY KEY (`id`) );');
  
		$this->execute('CREATE  TABLE `event` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `job_id` INT NOT NULL ,
  `date` DATETIME NOT NULL ,
  `description` VARCHAR(255) NOT NULL ,
  `type` VARCHAR(60) NOT NULL ,
  `next_event_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  PRIMARY KEY (`id`) );');
	}

	public function down()
	{
		echo "m141115_111144_all_the_tables does not support migration down.\n";
		return false;
	}
}