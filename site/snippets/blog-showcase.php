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

<ul class="blog-showcase">

  <?php if($articles->count()): ?>
    <?php foreach($articles as $article): ?>
      <a href="<?= $article->url() ?>">
      <article class="article index">

        <header class="article-header">
          <h2 class="article-title">
            <?= $article->title()->html() ?>
          </h2>
          <h4 class="read-more">Read More</h4>
        </header>

      </article>
      </a>

    <?php endforeach ?>
  <?php else: ?>
    <p>This blog does not contain any articles yet.</p>
  <?php endif ?>

  <h4 class="see-blog"><a href="/blog">See All</a></h4>

</ul>
