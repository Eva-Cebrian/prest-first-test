<?php

use Symfony\Component\Filesystem\Filesystem;

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_2_8_2($object)
{
    $result = true;

    if (!is_dir(_PS_ROOT_DIR_.'/stupload/')) {
        (new Filesystem)->mkdir(_PS_ROOT_DIR_.'/stupload/');
    }

    foreach(glob(_PS_UPLOAD_DIR_.'*') as $file) {
        if (is_dir($file) && substr(basename($file), 0, 2) == 'st') {
            (new Filesystem)->rename($file, _PS_ROOT_DIR_.'/stupload/'.basename($file), true);
        }
    }
    
	return $result;
}
