<?php snippet('blog_header')
// This page uses a separate controller to set variables, which can be used
// within this template file. This results in less logic in your templates,
// making them more readable. Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers
?>

  <main class="main" role="main">

    <header class="wrap wide">
      <h1><?= $page->title()->html() ?></h1>
      <hr />
    </header>

    <section class="wrap wide">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>

          <article class="article index">

            <header class="article-header">
              <h2 class="article-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h2>

              <p><?= $article->date('F jS, Y') ?></p>
            </header>

            <div class="text">
              <p>
                <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                <a href="<?= $article->url() ?>" class="article-more">read more</a>
              </p>
            </div>

          </article>

          <hr class='u-mar-top'/>

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

    <?php snippet('pagination') ?>

  </main>
