<?php
//die('TechTalk module setup');

$installer = $this;
$installer->startSetup();
$installer->run("CREATE TABLE ain_contact (
`request_id` INT(11) NOT NULL AUTO_INCREMENT,
`name` VARCHAR(255) NOT NULL,
`contact` TEXT NOT NULL,

PRIMARY KEY (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$installer->endSetup();