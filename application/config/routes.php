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

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

