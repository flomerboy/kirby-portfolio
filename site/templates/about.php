<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap wide">

      <header>
        <hr class="u-mar-top" />
        <h2><?= $page->title()->html() ?></h2>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
      </header>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>
