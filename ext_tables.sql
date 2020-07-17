#
# Table structure for table 'tx_statictagcloud_domain_model_tag'
#
CREATE TABLE tx_statictagcloud_domain_model_tag (
	tag varchar(255) DEFAULT '' NOT NULL,
	link varchar(255) DEFAULT '' NOT NULL,
	priority int(11) DEFAULT '0' NOT NULL
);