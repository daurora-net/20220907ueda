<aside class="sidebar">
  <?php if (is_active_sidebar('main-sidebar1')) : ?>
  <div class="banner">
    <?php dynamic_sidebar('main-sidebar1'); ?>
  </div>
  <?php endif; ?>
  <?php if (is_active_sidebar('main-sidebar2')) : ?>
  <?php dynamic_sidebar('main-sidebar2'); ?>
  <?php endif; ?>
  <?php if (is_active_sidebar('main-sidebar3')) : ?>
  <div class="category">
    <?php dynamic_sidebar('main-sidebar3'); ?>
  </div>
  <?php endif; ?>
</aside>