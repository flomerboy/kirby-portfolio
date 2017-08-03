<?php snippet('header') ?>

  <main class="home-main" role="main">

    <header class="wrap wide biography">
      <hr />
      <h4><?= $page->title()->html() ?></h4>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <h4 class="see-blog"><a href="/about">Read More</a></h4>
    </header>

    <section class="projects-section">
      <div class="wrap wide">
        <hr />
        <h4>Work</h4>
        <?php snippet('showcase', ['limit' => 9]) ?>
      </div>
    </section>

    <section class="blog-section">
      <div class="wrap wide">
        <hr />
        <h4>Thoughts</h4>
        <?php snippet('blog-showcase', ['limit' => 5]) ?>
      </div>
    </section>

  </main>

<?php snippet('footer') ?>
