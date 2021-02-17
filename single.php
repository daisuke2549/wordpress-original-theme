<?php get_header(); ?>    

	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- entry -->
				<article  <?php post_class( array( 'entry' ) ); ?>>

					<!-- entry-header -->
					<div class="entry-header">
						<div class="entry-label"><?php the_category(' '); ?></a></div><!-- /entry-item-tag -->
						<h1 class="entry-title"><?php the_archive_title(); //一覧ページ名を表示 ?></h1><!-- /entry-title -->

						<!-- entry-meta -->
						<div class="entry-meta">
							<time class="entry-published" datetime="2019-01-01"><?php the_time('Y/m/d');?></time>
							<time class="entry-updated" datetime="2019-04-01"><?php the_modified_time(); //一覧ページ名を表示 ?></time>
						</div><!-- /entry-meta -->

						<!-- entry-img -->
                        <!-- entry-img -->
                        <div class="entry-img">
                        <?php
                        if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large' );
                        }
                        ?>
                        </div><!-- /entry-img -->

					</div><!-- /entry-header -->

					<!-- entry-body -->
					<div class="entry-body">
					   <?php the_content(); ?>
					   <?php wp_link_pages(
                        array(
                            'before' => '<nav class="entry-links">',
                            'after' => '</nav>',
                            'link_before' => '',
                            'link_after' => '',
                            'next_or_number' => 'number',
                            'separator' => '',
                            )
                            );
                        ?>
					</div><!-- /entry-body -->


					<div class="entry-tag-items">
                    <?php $post_tags = get_the_tags(); ?>
                    <div class="entry-tag-items">
                    <div class="entry-tag-head">タグ</div>
                        <?php if ( $post_tags ) : ?>
                        <?php foreach ( $post_tags as $tag ) : ?>
                        <div class="entry-tag-item"><a href="<?php echo esc_url( get_tag_link($tag->term_id) ); ?>"><?php echo esc_html( $tag->name ); ?></a></div><!-- /entry-tag-item -->
                        <?php endforeach; ?>
                        <?php endif; ?>
					</div><!-- /entry-tag-items -->


					<div class="entry-related">
						<div class="related-title">関連記事</div>
						<?php if( has_category() ) {
						$post_cats = get_the_category();
						$cat_ids = array();
						//所属カテゴリーのIDリストを作っておく
						foreach($post_cats as $cat) {
						$cat_ids[] = $cat->term_id;
						}
						}

						$myposts = get_posts( array(
						'post_type' => 'post', // 投稿タイプ
						'posts_per_page' => '4', // ８件を取得
						'post__not_in' => array( $post->ID ),// 表示中の投稿を除外
						'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
						'orderby' => 'rand' // ランダムに
						) );
						if( $myposts ): ?>
						<div class="related-items">
						<?php foreach($myposts as $post): setup_postdata($post);?>
						<a class="related-item" href="<?php the_permalink(); ?>">
						<div class="related-item-img">
						<?php
						if (has_post_thumbnail() ) {
						// アイキャッチ画像が設定されてればミディアムサイズで表示
						the_post_thumbnail('medium');
						} else {
						// なければnoimage画像をデフォルトで表示
						echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
						}
						?>
						</div><!-- /related-item-img -->
								<div class="related-item-title"><?php the_title(); ?></div><!-- /related-item-title -->
							</a><!-- /related-item -->
							<?php endforeach; wp_reset_postdata(); ?>
						</div><!-- /related-items -->
						<?php endif; ?>
					</div><!-- /entry-related -->

                </article> <!-- /entry -->
			</main><!-- /primary -->

            <?php get_sidebar(); ?>


		</div><!-- /inner -->
	</div><!-- /content -->

    <?php get_footer(); ?>

    <?php if(is_single()): ?>
	<!-- footer-sns -->
	<div class="footer-sns">
		<div class="inner">
			<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

			<nav class="footer-sns-buttons">
				<ul>
					<li><a class="m_twitter"
							href="https://twitter.com/share?url=https://example.com/archive/123/&text=記事のタイトルが入ります" rel="nofollow"
							target="_blank"><img src="img/icon-twitter.png" alt=""></a></li>
					<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=https://example.com/archive/123/"
							rel="nofollow" target="_blank"><img src="img/icon-facebook.png" alt=""></a></li>
					<li><a class="m_hatena"
							href="https://b.hatena.ne.jp/add?mode=confirm&url=https://example.com/archive/123/&title=記事のタイトルが入ります"
							rel="nofollow" target="_blank"><img src="img/icon-hatena.png" alt=""></a></li>
					<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=https://example.com/archive/123/"
							rel="nofollow" target="_blank"><img src="img/icon-line.png" alt=""></a></li>
					<li><a class="m_pocket" href="https://getpocket.com/edit?url=https://example.com/archive/123/" rel="nofollow"
							target="_blank"><img src="img/icon-pocket.png" alt=""></a></li>
				</ul>
			</nav><!-- /footer-sns-buttons -->

		</div><!-- /inner -->
	</div><!-- /footer-sns -->
    <?php endif; ?>

	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/sns.js"></script>

</body>

</html>
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
