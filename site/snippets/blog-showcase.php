<?php

$articles = page('blog')->children()->visible()->flip();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $articles = $articles->limit($limit);

?>

<ul class="showcase grid gutter-1">

  <?php if($articles->count()): ?>
    <?php foreach($articles as $article): ?>

      <article class="article index">

        <header class="article-header">
          <h2 class="article-title">
            <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
          </h2>

          <p class="article-date"><?= $article->date('F jS, Y') ?></p>
        </header>

        <div class="text">
          <p>
            <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
            <a href="<?= $article->url() ?>" class="article-more">read more</a>
          </p>
        </div>

      </article>

      <hr />

    <?php endforeach ?>
  <?php else: ?>
    <p>This blog does not contain any articles yet.</p>
  <?php endif ?>

</ul>
