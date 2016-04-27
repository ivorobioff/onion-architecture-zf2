<?php
return  [
	'module_listener_options' => [
		'module_paths' => [
			'./vendor',
			'SimpleStore\\*' => './solution'
		],

		'config_glob_paths' => [
			'config/autoload/{,*.}{global,local}.php',
		]
	]
];
