<?php use Roots\Sage\Titles; ?>

<!-- Show the pagetitle -->
<?php if(get_field('pagetitle')): ?>
 <div class="page-header">
  <h1><?= Titles\title(); ?></h1>
 </div>
<?php endif; ?>
