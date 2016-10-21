<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Все новости</title>
    <style>
        article h1 {
            color: red;
        }
    </style>
</head>

<body>

  <?php foreach ($this->news as $article) : ?>
      <article>
        <h1><?php echo $article->title; ?></h1>
        <div><?php echo $article->lead; ?></div>
        <p><?php echo $article->author ?? 'без автора'; ?></p>
      </article>
  <?php endforeach; ?>

</body>

</html>