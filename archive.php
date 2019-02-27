<?php get_header(); ?>

<div class="col-md-8 blog-main">
  <?php the_archive_title('','の記事');?>
	<?php if(have_posts()):?>
	<?php while(have_posts()):the_post();?>
		<section class="articles_index">
			<h2><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
		<time class="date"><?php the_time('Y年n月j日'); ?></time>
		<div class="articles_index_thumbnail">
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail(); ?>
		</a>
		</div>
		<nav id="tag_navigation">	
	<?php if (the_category()) the_category('<ul id="tag_list"><li class="tag_name">','</li><li class="tag_name">','</li></ul>'); ?>
	</nav>
	</section>
		<?php endwhile;?>
		<div id="pager_navigation">
<?php posts_nav_link( '　', '<i class="fa fa-angle-left icon-left"></i>PREV', 'NEXT<i class="fa fa-angle-right icon-right"></i>' ); ?>
</div>
		<?php endif;?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
