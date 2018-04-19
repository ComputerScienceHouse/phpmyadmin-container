<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <http://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */

/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie
 */
$cfg['blowfish_secret'] = getenv('BLOWFISH_SECRET'); /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/**
 * Servers configuration
 */
$i = 0;

/**
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = getenv('ONE_AUTH_TYPE');
/* Server parameters */
$cfg['Servers'][$i]['host'] = getenv('ONE_HOST');
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
/* Select mysqli if your server has it */
$cfg['Servers'][$i]['extension'] = 'mysql';
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$cfg['Servers'][$i]['ssl'] = true;

/*
 * Second server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = getenv('TWO_AUTH_TYPE');
/* Server parameters */
$cfg['Servers'][$i]['host'] = getenv('TWO_HOST');
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
/* Select mysqli if your server has it */
$cfg['Servers'][$i]['extension'] = 'mysql';
$cfg['Servers'][$i]['AllowNoPassword'] = false;

/*
 * phpMyAdmin configuration storage settings.
 */

$i = 1; 
/* User used to manipulate with storage */
$cfg['Servers'][$i]['controluser'] = getenv('ONE_CONTROL_USER');
$cfg['Servers'][$i]['controlpass'] = getenv('ONE_CONTROL_PASS');

/* Storage database and tables */
//$cfg['Servers'][$i]['designer_coords'] = 'pma_designer_coords';
$cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
$cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
$cfg['Servers'][$i]['relation'] = 'pma__relation';
$cfg['Servers'][$i]['table_info'] = 'pma__table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma__column_info';
$cfg['Servers'][$i]['history'] = 'pma__history';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
$cfg['Servers'][$i]['tracking'] = 'pma__tracking';
$cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
$cfg['Servers'][$i]['recent'] = 'pma__recent';
$cfg['Servers'][$i]['favorite'] = 'pma__favorite';
$cfg['Servers'][$i]['users'] = 'pma__users';
$cfg['Servers'][$i]['usergroups'] = 'pma__usergroups';
$cfg['Servers'][$i]['navigationhiding'] = 'pma__navigationhiding';
$cfg['Servers'][$i]['savedsearches'] = 'pma__savedsearches';
$cfg['Servers'][$i]['central_columns'] = 'pma__central_columns';

/*
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = getenv('UPLOAD_DIR');
$cfg['SaveDir'] = getenv('SAVE_DIR');

$cfg['ForceSSL'] = getenv('FORCE_SSL');
$cfg['ShowPhpInfo'] = getenv('SHOW_PHP_INFO');
$cfg['ShowChgPassword'] = true;
$cfg['AllowArbitraryServer'] = true;
$cfg['LoginCookieRecall'] = 'something';
$cfg['LoginCookieValidity'] = 1400;
$cfg['RowActionLinksWithoutUnique'] = true;
$GLOBALS['pma_cookie_servername'] = getenv('PMA_COOKIE_SERVERNAME');

?>

