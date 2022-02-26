<?
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/lumen/');

$get_url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$set_url = (empty($get_url) ? 'index' : $get_url);
$url = explode('/', $set_url);

$title_page = '';
if ($url[0] == 'index'):
  $title_page = 'Home >> ';
else:
  $title_page = ucfirst($url[0]) . ' >> ';
endif;
