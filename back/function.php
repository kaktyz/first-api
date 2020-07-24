<?php

function getPosts($connect){
    $posts = mysqli_query($connect, "SELECT * FROM `products`");
    $postsList = [];
    while ($post = mysqli_fetch_assoc($posts)) {
        $postsList[] = $post;
    }
    echo json_encode($postsList);
}