<?php get_header(); ?>    


	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">
                <div class="archive-head m_description">
                <div class="archive-lead">ARCHIVE</div>
                <h1 class="archive-title m_category"><?php the_archive_title(); //一覧ページ名を表示 ?></h1><!-- /archive-title -->
                <div class="archive-description">
                <p><?php the_archive_description(); //説明を表示 ?></p>
                </div><!-- /archive-description -->
                </div><!-- /archive-head -->

				<!-- entries -->
				<div class="entries m_horizontal">

                <?php 
			if ( have_posts() ) : ?>

				<!-- entries -->
				<div class="entries">

				<?php 
				 while (have_posts()) : 
					the_post(); ?>

                <!-- entry-item -->
                <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="entry-item">
                <!-- entry-item-img -->
                <div class="entry-item-img">
                <?php
                if (has_post_thumbnail() ) {
                // アイキャッチ画像が設定されてれば大サイズで表示
                the_post_thumbnail('large');
                } else {
                // なければnoimage画像をデフォルトで表示
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                }
                ?>
                </div><!-- /entry-item-img -->
				<!-- entry-item-body -->
				<div class="entry-item-body">
				<div class="entry-item-meta">
			    <div class="entry-item-tag"><?php
                my_the_post_category(false); ?>
				</div><!-- /entry-item-tag -->
				<time class="entry-item-published" datetime="2019-01-01"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
				</div><!-- /entry-item-meta -->
				<h2 class="entry-item-title"><?php the_title(); ?></h2><!-- /entry-item-title -->
				<div class="entry-item-excerpt">
				<p><?php the_excerpt(); //抜粋を表示 ?></p>
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

			<!-- secondary -->
			<aside id="secondary">

				<!-- widget -->
				<div class="widget widget_text widget_custom_html">
					<div class="widget-title">プロフィール</div>

					<div class="wprofile">
						<div class="wprofile-img"><img src="img/profile.png" alt=""></div>
						<div class="wprofile-content">
							<p>
								テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
							</p>
						</div>
						<!-- /wprofile-content -->
						<nav class="wprofile-sns">
							<div class="wprofile-sns-item m_twitter"><a href="" rel="noopener noreferrer" target="_blank"><i
										class="fab fa-twitter"></i></a></div>
							<div class="wprofile-sns-item m_facebook"><a href="" rel="noopener noreferrer" target="_blank"><i
										class="fab fa-facebook-f"></i></a></div>
							<div class="wprofile-sns-item m_instagram"><a href="" rel="noopener noreferrer" target="_blank"><i
										class="fab fa-instagram"></i></a></div>
						</nav>
					</div><!-- /wprofile -->
				</div><!-- /widget -->


				<!-- widget -->
				<div class="widget widget_search">
					<div class="widget-title">検索</div>
					<!-- search-form -->
					<form method="get" class="search-form" action="#">
						<input type="search" class="search-field" value="" placeholder="キーワード" name="s" id="s">
						<button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
					</form><!-- /search-form -->
				</div><!-- /widget -->


				<!-- widget -->
				<div class="widget widget_popular">
					<div class="widget-title">人気記事</div>

					<div class="wpost-items m_ranking">

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry2.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry1.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry3.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry4.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry5.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

					</div><!-- /wpost-items -->
				</div><!-- /widget -->



				<!-- widget -->
				<div class="widget widget_recent">
					<div class="widget-title">新着記事</div>

					<div class="wpost-items">

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry7.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry6.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry10.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry7.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="img/entry9.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

					</div><!-- /wpost-items -->
				</div><!-- /widget -->

				<div class="widget widget_archive">
					<div class="widget-title">アーカイブ</div>
					<ul>
						<li><a href="#">テキストテキストテキスト</a></li>
						<li><a href="#">テキストテキストテキスト</a></li>
						<li><a href="#">テキストテキストテキスト</a></li>
					</ul>
				</div><!-- /widget -->

			</aside><!-- secondary -->


		</div><!-- /inner -->
	</div><!-- /content -->


    <?php get_footer(); ?>


	<!-- footer-sns -->
	<div class="footer-sns">
		<div class="inner">
			<div class="footer-sns-head">この記事をシェアする</div><!-- /footer-sns-head -->

			<nav class="footer-sns-buttons">
				<ul>
					<li><a class="m_twitter" href="https://twitter.com/share?url=https://example.com/category/a/&text=カテゴリー名"
							rel="nofollow" target="_blank"><img src="img/icon-twitter.png" alt=""></a></li>
					<li><a class="m_facebook" href="https://www.facebook.com/share.php?u=https://example.com/category/a/"
							rel="nofollow" target="_blank"><img src="img/icon-facebook.png" alt=""></a></li>
					<li><a class="m_hatena"
							href="https://b.hatena.ne.jp/add?mode=confirm&url=https://example.com/category/a/&title=カテゴリー名"
							rel="nofollow" target="_blank"><img src="img/icon-hatena.png" alt=""></a></li>
					<li><a class="m_line" href="https://social-plugins.line.me/lineit/share?url=https://example.com/category/a/"
							rel="nofollow" target="_blank"><img src="img/icon-line.png" alt=""></a></li>
					<li><a class="m_pocket" href="https://getpocket.com/edit?url=https://example.com/category/a/" rel="nofollow"
							target="_blank"><img src="img/icon-pocket.png" alt=""></a></li>
				</ul>
			</nav><!-- /footer-sns-buttons -->

		</div><!-- /inner -->
	</div><!-- /footer-sns -->


	<div class="floating">
		<a href="#"><i class="fas fa-chevron-up"></i></a>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>

</body>

</html>