<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap wide">
      <hr class="u-mar-top"/>
      <h2><?= $page->title()->html() ?></h2>
      <h4><?= $page->year() ?></h4>
    </header>

    <div class="text wrap wide">

      <?= $page->text()->kirbytext() ?>

      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>

    </div>

    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>
