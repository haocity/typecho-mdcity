<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->


    <link rel="stylesheet" href="//cdnjscn.b0.upaiyun.com/libs/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('icofont/iconfont.css'); ?>">

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
 
        
      
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<header class="nav-warp" >
			<div class="nav-set" onclick="hidennav()">
         		<div class="bar1"></div>
         		<div class="bar1"></div>
         		<div class="bar1"></div>
         	</div>
			<h1 class="nav-title" id="title">
			<a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>" rel="home"><?php $this->options->title() ?></a>
			</h1>
					
          
         <nav class="nav">
	         <ul class="search-warp" id="search-warp">
	         <li class="search" onclick="search()"><img src="<?php $this->options->themeUrl('img/icon-search.png'); ?>" alt="" /></li>
	         <li class="search-main" id="search-main">
	          			 <form method="post" class="search-form" action="./" style="display: none;" id="search">
							<input placeholder="let's search" onfocus="if(this.value=='let's search')this.value='';" onblur="if(this.value=='')this.value='search';" name="s" id="s" type="search"> 
							<input id="searchsubmit" value="Search" class="search-button" type="submit">
						</form>
			</li>
			<li class="search-right" ></li> 	
         </ul>
         <ul class="nav-content" id="nav">
           <li><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
			<!--分类菜单-->        
			<?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
			<?php while ($category->next()): ?>
			<li><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
			<?php endwhile; ?>
			
			</li>
			<!--页面菜单-->     
			 <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
			 <?php while($pages->next()): ?>
			<li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
			<!--页面菜单结束-->   
			 <?php endwhile; ?>
			          	
          	
         </ul>
         </nav>

</header>
<a href="#top">
<div class="top"></div>
</a>
<div class="container-warp" >
    <div class="container">
        <div class="container-main">

    
    
