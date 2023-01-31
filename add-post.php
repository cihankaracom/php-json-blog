<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $posts = json_decode(file_get_contents('posts.json'), true);
  
  $newId = count($posts) + 1;
  
  $newPost = [
    'id' => $newId,
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'category' => $_POST['category'],
  ];
  
  $posts[] = $newPost;
  
  file_put_contents('posts.json', json_encode($posts));
  
  header('Location: index.php');
  exit;
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Post</title>
</head>
<body>
  <h1>Add Post</h1>
  <form action="" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="body">Body:</label>
    <textarea name="body" id="body"></textarea>
    <br>
    <label for="category">Category:</label>
    <input type="text" name="category" id="category">
    <br>
    <input type="submit" value="Add Post">
  </form>
</body>
</html>