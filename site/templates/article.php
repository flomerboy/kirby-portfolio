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

      <?foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <?php if($image->link()->isNotEmpty()): ?>
            <a href="<?=$image->link() ?>">
          <?php endif ?>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>"
          <?php if($image->maxwidth()->bool()): ?>
            class="small-image"
          <?php endif ?>
          />
          <?php if($image->caption()->isNotEmpty()): ?>
          </a>
          <?php endif ?>
          <?php if($image->caption()->isNotEmpty()): ?>
            <figcaption>
              <?= $image->caption()->kirbytext() ?>
            </figcaption>
          <?php endif ?>
        </figure>
      <?php endforeach ?>

    </article>

    <?php snippet('prevnext', ['flip' => true]) ?>

  </main>

<?php snippet('footer') ?>
