<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_2_8_3($object)
{
    $result = true;
    
    @unlink(_PS_MODULE_DIR_.$object->name.'/config/theme-ctl.log');
    @file_put_contents(_PS_MODULE_DIR_.$object->name.'/config/.htaccess', "order allow,deny\ndeny from all");
    
	return $result;
}
