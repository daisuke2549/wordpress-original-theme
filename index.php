<?php get_header(); ?>    
    
    <!-- pickup -->
	<div id="pickup">
		<div class="inner">

			<div class="pickup-items">

				<a href="#" class="pickup-item">
					<div class="pickup-item-img">
                       <img src="<?php echo get_template_directory_uri() ?>/img/pickup1.png" alt="">
						<div class="pickup-item-tag">カテゴリ名</div><!-- /pickup-item-tag -->
					</div><!-- /pickup-item-img -->
					<div class="pickup-item-body">
						<h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /pickup-item-title -->
					</div><!-- /pickup-item-body -->
				</a><!-- /pickup-item -->

				<a href="#" class="pickup-item">
					<div class="pickup-item-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pickup2.png" alt="">
						<div class="pickup-item-tag">カテゴリ名</div><!-- /pickup-item-tag -->
					</div><!-- /pickup-item-img -->
					<div class="pickup-item-body">
						<h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /pickup-item-title -->
					</div><!-- /pickup-item-body -->
				</a><!-- /pickup-item -->

				<a href="#" class="pickup-item">
					<div class="pickup-item-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/pickup3.png" alt="">
						<div class="pickup-item-tag">カテゴリ名</div><!-- /pickup-item-tag -->
					</div><!-- /pickup-item-img -->
					<div class="pickup-item-body">
						<h2 class="pickup-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /pickup-item-title -->
					</div><!-- /pickup-item-body -->
				</a><!-- /pickup-item -->

			</div><!-- /pickup-items -->

		</div><!-- /inner -->
	</div><!-- /pickup -->


	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">
			<?php 
			if ( have_posts() ) : ?>

				<!-- entries -->
				<div class="entries">

				<?php 
				 while (have_posts()) : 
					the_post(); ?>

				<!-- entry-item -->
				<a href="#" class="entry-item">
				<!-- entry-item-img -->
				<div class="entry-item-img">
				<img src="<?php echo get_template_directory_uri() ?>/img/entry1.png" alt="">
				</div><!-- /entry-item-img -->
				<!-- entry-item-body -->
				<div class="entry-item-body">
				<div class="entry-item-meta">
				<div class="entry-item-tag">カテゴリ名</div><!-- /entry-item-tag -->
				<time class="entry-item-published" datetime="2019-01-01">2019/1/1</time><!-- /entry-item-published -->
				</div><!-- /entry-item-meta -->
				<h2 class="entry-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</h2><!-- /entry-item-title -->
				<div class="entry-item-excerpt">
				<p>文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入ります文章の一部が入…</p>
				</div><!-- /entry-item-excerpt -->
				</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->

				<?php 
				  endwhile;
				?>	

				</div><!-- /entries -->
				<?php endif; ?>

				<?php if (paginate_links() ) :  ?>

				<!-- pagenation -->
				<div class="pagenation">
				<?php 
				echo
				paginate_links(
				array(
				'end_size' => 1,
				'mid_size' => 1,
				'prev_next' => true,
				'prev_text' => '<i class="fas fa-angle-left"></i>',
				'next_text' => '<i class="fas fa-angle-right"></i>',
				)
				);
                ?>
				</div><!-- /pagenation -->
				<?php endif; ?>

			</main><!-- /primary -->

            <?php get_sidebar( $sidebar ); ?>

		</div><!-- /inner -->
	</div><!-- /content -->

<?php get_footer(); ?>
