<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//feedback form
$route['feedback'] = 'pages/view';

//routing exercise
$route['default_controller'] = 'main';

//countdown
$route['countdown'] = 'countdown/view';

//money button game
$route['money/button'] = 'moneybutton';

//raffle draw
$route['raffle'] = 'raffledraw';

//bookmark
$route['bookmark'] = 'bookmark';
//view bookmark
$route['delete/(:num)'] = 'bookmarks/delete/$1'; 
//delete
$route['bookmark/destroy/(:num)'] = 'bookmark/destroy/$1';
//add
$route['bookmark/addbookmark'] = 'bookmark/addbookmark';
//create
$route['bookmark/createBookMark'] = 'bookmark/createBookMark';


//phonebook
$route['phonebook'] = 'phonebook';
//add
$route['phoneboook/create'] = 'phonebook/create';
//store
$route['phoneboook/store'] = 'phonebook/store';
//view contact
$route['phonebook/(:num)'] = 'phonebook/view/$1';
//edit and update
$route['phonebook/(:num)'] = 'phonebook/edit/$1';
//delete
$route['phonebook/destroy/(:num)'] = 'phonebook/destroy/$1'; 



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

