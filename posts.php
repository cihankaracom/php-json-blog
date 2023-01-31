<?php

$posts = json_decode(file_get_contents('posts.json'), true);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Blog Posts</title>
</head>
<body>
  <h1>Blog Posts</h1>
  <?php foreach ($posts as $post): ?>
    <h3><?php echo $post['title']; ?></h3>
    <p><?php echo $post['body']; ?></p>
    <p>Category: <?php echo $post['category']; ?></p>
  <?php endforeach; ?>
</body>
</html>