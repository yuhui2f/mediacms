<?php
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
$params = require(dirname(__FILE__) . DS . 'setting_product.php');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'id' => $params['domain'],
	'name'=> $params['sitename'],
    'language' => 'zh_cn',
    'charset' => 'utf-8',
    'timezone' => 'Asia/Shanghai',

    'import' => array(
        'application.models.*',
        'application.extensions.*',
        'application.libs.*',
        'application.helpers.*',
    ),
	'components'=>array(
		'db' => array(
            'class' => 'CDbConnection',
			'connectionString' => 'mysql:host=localhost; port=3306; dbname=e23_mediacms',
			'username' => 'root',
		    'password' => 'cdc_790406',
		    'charset' => 'utf8',
		    'persistent' => true,
		    'tablePrefix' => 'cd_',
//             'enableParamLogging' => true,
//             'enableProfiling' => true,
	        'schemaCacheID' => 'cache',
	        'schemaCachingDuration' => 3600 * 24,    // metadata 缓存超时时间(s)
	        'queryCacheID' => 'cache',
	        'queryCachingDuration' => 60,
        ),
		'newsdb' => array(
            'class' => 'CDbConnection',
			'connectionString' => 'mysql:host=192.168.10.2; port=3306; dbname=cms_e23',
			'username' => 'search',
		    'password' => 'searche23',
		    'charset' => 'utf8',
		    'persistent' => true,
		    'tablePrefix' => 'v9_',
            'enableParamLogging' => true,
            'enableProfiling' => true,
        ),
        'cache' => array(
            'class' => 'CFileCache',
		    'directoryLevel' => 2,
        ),
	),
    'params' => $params,
);