<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text wrap wide u-mar-top">
      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <?php if($image->link()->isNotEmpty()): ?>
            <a href="<?=$image->link()?>">
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

    <?= $page->text()->kirbytext() ?>


    </div>

    <?php snippet('prevnext') ?>

  </main>
