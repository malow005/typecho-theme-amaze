<?php
/**
 * 这是基于AmazeUI&Jeklly theme的主题
 * 
 * @package Amaze Theme
 * @author Spiritree
 * @version 1.1.0
 * @link spiritree.me
 */


if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<!-- header end -->

<!-- content start -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-lg-8 am-u-sm-12">
        <?php while($this->next()): ?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-lg-12 am-u-sm-12 blog-entry-text post-preview">
                <div class="topic-header">
                    <div class="pull-left">
                        <div class="blog-flex-center">
                            <div class="blog-flex0">
                                <img src="<?php $this->options->avatarUrl(); ?>" alt="" class="link avatar avatar-image">
                            </div>
                            <div class="author-lockup blog-flex1">
                                <a class="link" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                                <span class="in">in</span>
                                <span class="category-name">
                                    <?php $this->category('  '); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span class="pull-right time"><?php $this->date('F j, Y'); ?></span>
                </div>
                <h1 class="post-index-title"><a target="_blank" itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
            <div>
            <div class="post-content-preview">
                <?php $this->excerpt(200, '...'); ?>
            </div>       
        </article>
        <?php endwhile; ?>
        <ul class="am-pagination">
            <?php $this->pageLink('&laquo; Prev','prev');?>
            <?php $this->pageLink('Next &raquo;','next');?>
        </ul>
    </div>
    <?php $this->need('sidebar.php'); ?>
</div>
<!-- content end -->

<!-- footer start -->
<?php $this->need('footer.php'); ?>
<!-- footer end -->