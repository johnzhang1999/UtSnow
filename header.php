<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title(); echo " - "; bloginfo('name');
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet"
<!-- Le javascript -->
   <script src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/2.0.4/js/bootstrap.min.js"></script>
 <script src="http://johnzhang-files.qiniudn.com/bootswatch.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/instantclick.min.js" data-no-instant></script>
<script data-no-instant>InstantClick.init();</script>
 
 
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
  <?php wp_head(); ?>
  </head>
<?php flush(); ?>
  <body>
<div id="jv-loadingbar"></div>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if (is_home()) { echo 'class="current"';} ?>><a title="<?php bloginfo('name'); ?>"  href="<?php echo get_option('home'); ?>/">主页</a></li>
		<?php wp_list_pages('depth=1&title_li=0&sort_column=menu_order'); ?>
		<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">分类<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                

<?php
$currentcategory = '';

// 以下这行代码用于在导航栏添加分类列表，
// 如果你不想添加分类到导航中，
// 请删除 6 - 14 行代码
if  (!is_page() && !is_home()) {
    $catsy = get_the_category();
    $myCat = $catsy[0]->cat_ID;
    $currentcategory = '&current_category='.$myCat;
}
wp_list_categories('depth=1&title_li=&show_count=0&hide_empty=0&child_of=0'.$currentcategory);
?>

              </ul>
            </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="你要找什么？">
        </div>
        <button type="submit" class="btn btn-default" onClick=”if(document.forms['search'].searchinput.value==’- Search -‘)document.forms['search'].searchinput.value=”;”>搜索</button>
      </form>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br><br><br><br>
    <div class="container">