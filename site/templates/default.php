<h1><?= $page->title() ?></h1>

<?php foreach ($site->children()->listed()->sortBy('sort', 'desc') as $p) : ?>
  <h2><?= $p->title()->html()?></h2>
<?php endforeach ?>
