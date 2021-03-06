ALTER TABLE `zenylog` MODIFY `type` ENUM('T','V','P','M','S','N','D','C','A','E','I','B') NOT NULL DEFAULT 'S';

ALTER TABLE `elemental` CHANGE COLUMN `str` `atk1` MEDIUMINT(6) UNSIGNED NOT NULL DEFAULT 0,
 CHANGE COLUMN `agi` `atk2` MEDIUMINT(6) UNSIGNED NOT NULL DEFAULT 0,
 CHANGE COLUMN `vit` `matk` MEDIUMINT(6) UNSIGNED NOT NULL DEFAULT 0,
 CHANGE COLUMN `int` `aspd` SMALLINT(4) UNSIGNED NOT NULL DEFAULT 0,
 CHANGE COLUMN `dex` `def` SMALLINT(4) UNSIGNED NOT NULL DEFAULT 0,
 CHANGE COLUMN `luk` `mdef` SMALLINT(4) UNSIGNED NOT NULL DEFAULT 0,
 CHANGE COLUMN `life_time` `flee` SMALLINT(4) UNSIGNED NOT NULL DEFAULT 0,
 ADD COLUMN `hit` SMALLINT(4) UNSIGNED NOT NULL DEFAULT 0 AFTER `flee`,
 ADD COLUMN `life_time` INT(11) NOT NULL DEFAULT 0 AFTER `hit`;

 CREATE TABLE IF NOT EXISTS `interreg` (
  `varname` varchar(11) NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`varname`)
) ENGINE=InnoDB;
INSERT INTO `interreg` (`varname`, `value`) VALUES
('nsiuid', '0');

ALTER TABLE `auction` ADD `unique_id` BIGINT NOT NULL DEFAULT '0';
ALTER TABLE `cart_inventory` ADD `unique_id` BIGINT NOT NULL DEFAULT '0';
ALTER TABLE `guild_storage` ADD `unique_id` BIGINT NOT NULL DEFAULT '0';
ALTER TABLE `inventory` ADD `unique_id` BIGINT NOT NULL DEFAULT '0';
ALTER TABLE `mail` ADD `unique_id` BIGINT NOT NULL DEFAULT '0';
ALTER TABLE `storage` ADD `unique_id` BIGINT NOT NULL DEFAULT '0';

ALTER TABLE `picklog` ADD `unique_id` BIGINT NOT NULL DEFAULT '0' AFTER `card3`;
