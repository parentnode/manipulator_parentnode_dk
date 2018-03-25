CREATE TABLE `SITE_DB`.`item_project_group_segments` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`segment_id` int(11) NOT NULL ,
	
	`module` varchar(255) NOT NULL,

    `position` int(11) DEFAULT '0',
	
	PRIMARY KEY (`id`),
	KEY `segment_id` (`segment_id`),
	CONSTRAINT `item_project_group_segments_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `SITE_DB`.`item_project_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
)