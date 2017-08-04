<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap wide">

      <header>
        <h2 class="u-mar-top"><?= $page->title()->html() ?></h2>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <hr />
      </header>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>
