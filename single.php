<?php get_header(); ?>
<main>
  <div class="single__container">
    <div class="article__header">
      <span class="single__cat"><a href="<?php the_permalink(); ?>" rel="category tag">
          <?php $postcat = get_the_category();
          echo $postcat[0]->name;
          ?>
        </a></span>
      <h1>
        <?php
        if (mb_strlen($post->post_title, 'UTF-8') > 30) {
          $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
          echo $title . '…';
        } else {
          echo $post->post_title;
        }
        ?>
      </h1>
      <ul class="flex__item tag__ul">
        <li class="single__tag"><?php echo get_the_date('Y-m-d'); ?></li>
      </ul>
    </div>
    <div class="article__eyecatch">
      <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail(); ?>
      <?php else : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
      <?php endif; ?>
    </div>

    <div class="article__content">
      <?php the_content(); ?>
    </div>

  </div>
</main>
<?php get_footer(); ?>