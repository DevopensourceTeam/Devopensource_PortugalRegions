<?php
/**
 * Installer regions portugal
 * @author Jose Ruzafa
 * @company Devopensource
 * @version 0.1.0
 * @var $installer Mage_Core_Model_Resource_Setup
 */
$installer = $this;

$installer->startSetup();
$installer->run("

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Aveiro', 'Aveiro');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Aveiro'), ('pt_PT', LAST_INSERT_ID(), 'Aveiro');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Beja', 'Beja');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Beja'), ('pt_PT', LAST_INSERT_ID(), 'Beja');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Braga', 'Braga');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Braga'), ('pt_PT', LAST_INSERT_ID(), 'Braga');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Bragança', 'Bragança');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Bragança'), ('pt_PT', LAST_INSERT_ID(), 'Bragança');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Castelo Branco', 'Castelo Branco');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Castelo Branco'), ('pt_PT', LAST_INSERT_ID(), 'Castelo Branco');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Coimbra', 'Coimbra');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Coimbra'), ('pt_PT', LAST_INSERT_ID(), 'Coimbra');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Évora', 'Évora');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Évora'), ('pt_PT', LAST_INSERT_ID(), 'Évora');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Faro', 'Faro');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Faro'), ('pt_PT', LAST_INSERT_ID(), 'Faro');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Guarda', 'Guarda');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Guarda'), ('pt_PT', LAST_INSERT_ID(), 'Guarda');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Leiria', 'Leiria');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Leiria'), ('pt_PT', LAST_INSERT_ID(), 'Leiria');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Lisboa', 'Lisboa');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Lisboa'), ('pt_PT', LAST_INSERT_ID(), 'Lisboa');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Portalegre', 'Portalegre');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Portalegre'), ('pt_PT', LAST_INSERT_ID(), 'Portalegre');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Porto', 'Porto');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Porto'), ('pt_PT', LAST_INSERT_ID(), 'Porto');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Santarém', 'Santarém');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Santarém'), ('pt_PT', LAST_INSERT_ID(), 'Santarém');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Setúbal', 'Setúbal');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Setúbal'), ('pt_PT', LAST_INSERT_ID(), 'Setúbal');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Viana do Castelo', 'Viana do Castelo');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Viana do Castelo'), ('pt_PT', LAST_INSERT_ID(), 'Viana do Castelo');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Vila Real', 'Vila Real');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Vila Real'), ('pt_PT', LAST_INSERT_ID(), 'Vila Real');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Viseu', 'Viseu');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Viseu'), ('pt_PT', LAST_INSERT_ID(), 'Viseu');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Açores', 'Açores');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Açores'), ('pt_PT', LAST_INSERT_ID(), 'Açores');

INSERT INTO `directory_country_region` (`country_id`, `code`, `default_name`) VALUES
    ('PT', 'Madeira', 'Madeira');
INSERT INTO `directory_country_region_name` (`locale`, `region_id`, `name`) VALUES
    ('en_US', LAST_INSERT_ID(), 'Madeira'), ('pt_PT', LAST_INSERT_ID(), 'Madeira');

");


$installer->endSetup();