<?php
//20220318
if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_7_0($object)
{
    $result = Db::getInstance()->execute('ALTER TABLE `'._DB_PREFIX_.'st_blog_slider`     ADD COLUMN `reverse_direction` TINYINT(1) DEFAULT \'0\' NULL AFTER `pause_on_hover`,     ADD COLUMN `pause_on_enter` TINYINT(1) DEFAULT \'0\' NULL AFTER `reverse_direction`;');
    
    return $result;
}
