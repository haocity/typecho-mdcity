<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="post-wrap" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta">
            <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
            <li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
            <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
    </article>
   <ul class="post-near">
        <li class="post-previous"><?php $this->thePrev('%s','没有了'); ?></li>
        <li class="post-last"><?php $this->theNext('%s','没有了'); ?></li>
    </ul>
    <?php $this->need('comments.php'); ?>

 
</div><!-- end #main-->


<?php $this->need('footer.php'); ?>
