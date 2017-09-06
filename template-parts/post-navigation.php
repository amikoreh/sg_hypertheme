<?php if ($paged > 1) { ?>

<nav id="nav-posts">
 <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
 <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
</nav>

<?php } else { ?>

<nav id="nav-posts">
 <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
</nav>

<?php } ?>