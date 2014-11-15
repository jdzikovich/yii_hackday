<?php

class m141115_104812_init_migration extends CDbMigration
{
	public function up()
	{
		// TODO
		// Need to create database schema via sql first 
		$this->execute("CREATE  TABLE `user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(60) NOT NULL ,
  `password` VARCHAR(60) NOT NULL ,
  `email` VARCHAR(60) NOT NULL ,
  PRIMARY KEY (`id`) );");
  		
  		$md5 = md5('pass');
  
  		$this->execute("INSERT INTO user (name, password, email) VALUES
  		('Julia', '$md5', 'julia.dzikovich@gmail.com')");
  
	}

	public function down()
	{
		$this->dropTable("user");
	}

}