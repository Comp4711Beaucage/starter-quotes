<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//Default routing
$route['default_controller'] = "welcome";
$route['404_override'] = '';
//Wildcard routing
$route['sleep']= 'First/zzz';
$route['lock/:any/:any'] = "welcome/shucks";
$route['show/(:num)']="First/gimme/$1";
//Standard routing
$route['last'] = 'last/welcome';
//Regex Routing
$route['(^[a-zA-Z]{4})/bingo'] = "bingo";
$route['(^comp[0-9]{4})/(.*)'] = "wise/bingo";

//executes a function that displays a gif using Callback routing
$route['dunno'] = function()
    {
        $source = './assets/images/rick.gif'; // an image you provide
        if (!file_exists($source)) { show_404($source); }
        header("Content-type: image/gif"); 
        header('Content-Disposition: inline');
        readfile($source); // dish it
        die(); // and we don't have to go any further
    };



/* End of file routes.php */
/* Location: ./application/config/routes.php */