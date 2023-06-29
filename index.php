<?php
require 'bootstrap.php';

if (isset($_GET['post_id']) && isset($_SESSION['loggedUser'])) {
    $post->deletePost($_GET['post_id']);
}

$posts = $post->sellectAll('posts');

require_once 'views/index.view.php';
