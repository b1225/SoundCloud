<?php
return array(
	'_root_'  => 'top/index',  // The default route
	'_404_'   => 'top/404',    // The main 404 route
        //'search' => 'top/search',
    
        'auth/(:any)' => 'auth/$1',
);