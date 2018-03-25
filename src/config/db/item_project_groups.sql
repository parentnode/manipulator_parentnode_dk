CREATE TABLE `SITE_DB`.`item_project_groups` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`item_id` int(11) NOT NULL ,
	
	`group` varchar(255) NOT NULL,
	
	PRIMARY KEY (`id`),
	KEY `item_id` (`item_id`),
	CONSTRAINT `item_project_groups_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `SITE_DB`.`items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
)