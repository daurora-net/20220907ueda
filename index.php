<?php get_header(); ?>
<div class="top-eyecatch"></div>
<main>
  <div class="media-firstview">
    <h1 class="media__fv-ttl">Commit to the growth<br>for everyone</h1>
  </div>
  <div class="container">
    <p class="newpost__sub-ttl">New Post</p>
    <h2 class="newpost__ttl">新着記事</h2>
    <div class="flex__item">
      <div class="article-wrap">
        <div class="flex__item">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="article__card">
            <div class="article__card-eyecatch">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
              <?php endif; ?>
            </div>
            <?php if (!is_category() && has_category()) : ?>
            <span class="article__card-cat">
              <?php $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?>
            </span>
            <?php endif; ?>
            <div class="article__card-content">
              <h3 class="article__card-content-ttl">
                <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                      $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title . '…';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
              </h3>
              <ul class="article__card-content-list">
                <li class="article__card-tag"><?php echo get_the_date('Y-m-d'); ?></li>
              </ul>
            </div>
          </a>
          <?php endwhile; ?>
          <?php else : ?>
          <p>投稿が見つかりません。</p>
          <?php endif; ?>
        </div>
      </div>
      <?php get_sidebar(); ?>

    </div>
  </div>

</main>
<?php get_footer(); ?>