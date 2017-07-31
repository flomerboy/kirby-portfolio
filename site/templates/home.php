<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

    <section class="projects-section">

      <div class="wrap wide">
        <?php snippet('showcase', ['limit' => 3]) ?>
      </div>

    </section>

    <section class="blog-section">

      <div class="wrap wide">
        <?php snippet('blog-showcase', ['limit' => 3]) ?>
      </div>

    </section>

  </main>

<?php snippet('footer') ?>
