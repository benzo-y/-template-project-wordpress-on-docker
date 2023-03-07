<div class="clearfix">
  <?php
  $link = get_previous_posts_link('&larr; 新しい記事へ');
  if ($link) {
    $link = str_replace('<a', '<a class="btn btn-primary float-light"', $link);
    echo $link;
  }
  ?>

  <?php
  $link = get_next_posts_link('古い記事へ &rarr;');
  if ($link) {
    $link = str_replace('<a', '<a class="btn btn-primary float-right"', $link);
    echo $link;
  }
  ?>
</div>