<?php

$TYPO3_CONF_VARS['SC_OPTIONS']['GLOBAL']['cliKeys']['crawler'] = array('EXT:crawler/cli/crawler_cli.php','_CLI_lowlevel');
$TYPO3_CONF_VARS['SC_OPTIONS']['GLOBAL']['cliKeys']['crawler_im'] = array('EXT:crawler/cli/crawler_im.php','_CLI_lowlevel');

$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['connectToDB']['tx_crawler'] = 'EXT:crawler/class.tx_crawler_lib.php:&tx_crawler_lib->fe_init';
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['initFEuser']['tx_crawler'] = 'EXT:crawler/class.tx_crawler_lib.php:&tx_crawler_lib->fe_feuserInit';
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['isOutputting']['tx_crawler'] = 'EXT:crawler/class.tx_crawler_lib.php:&tx_crawler_lib->fe_isOutputting';
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['hook_eofe']['tx_crawler'] = 'EXT:crawler/class.tx_crawler_lib.php:&tx_crawler_lib->fe_eofe';

?>