<?php if(!defined('GX_LIB')) die("Direct Access Not Allowed!");
/**
* GeniXCMS - Content Management System
* 
* PHP Based Content Management System and Framework
*
* @package GeniXCMS
* @since 0.0.1 build date 20141006
* @version 0.0.7-alpha
* @link https://github.com/semplon/GeniXCMS
* @link http://genixcms.org
* @author Puguh Wijayanto (www.metalgenix.com)
* @copyright 2014-2015 Puguh Wijayanto
* @license http://www.opensource.org/licenses/mit-license.php MIT
*
*/


$post="";
$data = Router::scrap($param);
//$cat = Db::escape(Typo::Xclean($_GET['cat']));
$cat = (SMART_URL) ? $data['cat'] : Db::escape(Typo::cleanX(Typo::strip($_GET['cat'])));
$data['max'] = Options::get('post_perpage');
if (SMART_URL) {
    if ( isset($data['paging']) ) {
        $paging = $data['paging'];
    }
}else{
    if (isset($_GET['paging'])) {
    $paging = Typo::int($_GET['paging']);
    }
}

//$paging = (SMART_URL) ? $data['paging'] : Typo::int(is_int($_GET['paging']));
if(isset($paging)){
    if($paging > 0) {
        $offset = ($paging-1)*$data['max'];
    }else{
        $offset = 0;
    }
    $pagingtitle = " - Page {$paging}";
}else{
    $offset = 0;
    $paging = 1;
    $pagingtitle = "";
}
$data['sitetitle'] = "Category: ".Categories::name($cat).$pagingtitle;
$data['posts'] = Db::result(
                sprintf("SELECT * FROM `posts` 
                    WHERE `type` = 'post' 
                    AND `cat` = '%d'
                    AND `status` = '1'
                    ORDER BY `date` 
                    DESC LIMIT %d, %d",
                    $cat, $offset, $data['max']
                    )
                );
$data['num'] = Db::$num_rows;

if(Options::get('multilang_enable') === 'on') {
    if (isset($_GET['lang'])) {
        foreach ($data['posts'] as $p) {
            if (Posts::existParam('multilang', $p->id)
                && Options::get('multilang_default') !== $_GET['lang']) {
                # code...
                $lang = Language::getLangParam($_GET['lang'], $p->id);
                $posts = get_object_vars($p);
                $posts = array_merge($posts,$lang);
                
            }else{
                $posts = $p;
            }
            $posts_arr = array();
            $posts_arr = json_decode(json_encode($posts), FALSE);
            // $posts[] = $posts;
            $post_arr[] = $posts_arr;
            $data['posts'] = $post_arr;
        }
    }else{
        $data['posts'] = $data['posts'];
    }

}else{
    $data['posts'] = $data['posts'];
}
// print_r($data['posts']);
$url = Url::cat($_GET['cat']);
$paging = array(
                'paging' => $paging,
                'table' => 'posts',
                'where' => '`type` = \'post\' AND `cat` = \''.$cat.'\'',
                'max' => $data['max'],
                'url' => $url,
                'type' => Options::get('pagination')
            );
$data['paging'] = Paging::create($paging, SMART_URL);
Theme::theme('header',$data);
Theme::theme('cat', $data);
Theme::footer();
exit;


/* End of file cat.control.php */
/* Location: ./inc/lib/Control/Frontend/cat.control.php */