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

    <form action="/index/login" method="post">
        Логин: <input type="text" name="login">
        Пароль: <input type="password" name="password">
        <input type="submit">
    </form>

  <?php foreach ($this->news as $article) : ?>
      <article>
        <h1>
            <a href="/news/one/?id=<?php echo $article->id; ?>">
                <?php echo $article->title; ?>
            </a>
        </h1>
        <div><?php echo $article->lead; ?></div>
        <p><?php echo isset($article->author) ? $article->author->name : '' ?></p>
      </article>
  <?php endforeach; ?>

</body>

</html>