<?php

$posts = json_decode(file_get_contents('posts.json'), true);
$categories = json_decode(file_get_contents('categories.json'), true);

?>
<!DOCTYPE html>
<html>
<head>
  <title>My PHP Blog</title>
</head>
<body>
  <h1>My PHP Blog</h1>
  
  <h2>Blog Posts</h2>
  <?php foreach ($posts as $post): ?>
    <h3><?php echo $post['title']; ?></h3>
    <p><?php echo $post['body']; ?></p>
    <p>Category: <?php echo $post['category']; ?></p>
  <?php endforeach; ?>
  
  <h2>Categories</h2>
  <ul>
    <?php foreach ($categories as $category): ?>
      <li><?php echo $category; ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>