<?php snippet('header') ?>

  <main class="main" role="main">

    <article class="article single wrap wide">

      <header class="article-header">
        <hr class="u-mar-top"/>
        <h2><?= $page->title()->html() ?></h2>
        <h4><?= $page->date('F jS, Y') ?></h4>
      </header>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>

    </article>

    <?php snippet('prevnext', ['flip' => true]) ?>

  </main>

<?php snippet('footer') ?>
