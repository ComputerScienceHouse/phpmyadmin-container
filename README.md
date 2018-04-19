# phpmyadmin Docker Image

## Environment Variables for setup

### General Settings

|PhpMyAdmin Variable|Environment Variable|
|-------------------|--------------------|
|`$cfg['blowfish_secret']`|`BLOWFISH_SECRET`|
|`$cfg['UploadDir']`|`UPLOAD_DIR`|
|`$cfg['SaveDir']`|`SAVE_DIR`|
|`$cfg['ForceSSL']`|`FORCE_SSL`|
|`$cfg['ShowPhpInfo']`|`SHOW_PHP_INFO`|
|`$GLOBALS['pma_cookie_servername']`|`PMA_COOKIE_SERVERNAME`|

### First Server

|PhpMyAdmin Variable|Environment Variable|
|-------------------|--------------------|
|`$cfg['Servers'][1]['auth_type']`|`ONE_AUTH_TYPE`|
|`$cfg['Servers'][1]['host']`|`ONE_HOST`|
|`$cfg['Servers'][1]['controluser']`|`ONE_CONTROL_USER`|
|`$cfg['Servers'][1]['controlpass']`|`ONE_CONTROL_PASS`|

### Second Server

|PhpMyAdmin Variable|Environment Variable|
|-------------------|--------------------|
|`$cfg['Servers'][2]['auth_type']`|`TWO_AUTH_TYPE`|
|`$cfg['Servers'][2]['host']`|`TWO_HOST`|
