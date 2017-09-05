<?php

defined('GX_LIB') or die('Direct Access Not Allowed!');
/*
 * GeniXCMS - Content Management System
 *
 * PHP Based Content Management System and Framework
 *
 * @since 0.0.1 build date 20141007
 *
 * @version 1.1.0
 *
 * @link https://github.com/semplon/GeniXCMS
 * @link http://genix.id
 *
 * @author Puguh Wijayanto <psw@metalgenix.com>
 * @copyright 2014-2017 Puguh Wijayanto
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
$data = Router::scrap($param);
$data['sitemap'] = (SMART_URL) ? $data['sitemap'] : Typo::cleanX($_GET['sitemap']);
$map = Sitemap::$_map;

if (isset($data['sitemap']) && $data['sitemap'] != '') {
    # code...
    $cat = Categories::id($data['sitemap']);
    $type = Categories::type($cat);
    Sitemap::create($type, 3000, $map[$type]['url'], $map[$type]['class'], $cat);
}else{
    Sitemap::createIndex();
}

/* End of file sitemap.control.php */
/* Location: ./inc/lib/Control/Frontend/sitemap.control.php */
