<?php
	
	$w_routes = array(
		['GET', 		'/', 										'Default#home', 			'default_home'],
		['GET|POST',	'/login',									'Default#login',			'users_login'],
		['GET',			'/logout',									'Default#logout',			'default_logout'],
		['GET|POST',	'/users/password-recovery',					'Default#passwordRecovery',	'default_password_recovery'],
		['GET|POST',	'/users/reset-password/[:token]',			'Default#resetPassword',	'default_reset_password'],
		['GET', 		'/pictures/list', 							'Picture#displayAll', 		'picture_all'],
		['GET|POST', 	'/users/dashboard', 						'Default#dashboard', 		'default_dashboard'],
		['GET|POST', 	'/add-picture', 							'Picture#addPicture', 		'pictures/add-picture'],
		['GET|POST',	'/users/add',								'Default#insertUser',		'default_add'],
		['GET',			'/pictures/details/[i:id]',					'Picture#details',			'picture_details'],
		['GET|POST',	'/users/profil',							'Default#profildashboard',	'default_profil'],
	);