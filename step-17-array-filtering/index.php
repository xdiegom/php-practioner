<?php

class Post
{
    public $title;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', 'Diego', true),
    new Post('My Second Post', 'Diego', true),
    new Post('My Third Post', 'Diego', true),
    new Post('My Fourth Post', 'Diego', true),
    new Post('My Fifth Post', 'Diego', false),
];

$unpublishedPosts  = array_filter($posts, function ($post) {
    return !$post->published;
});

echo '<h1>Array filter: </h1>';

var_dump($unpublishedPosts);

/* Array Map:
    When you need to modify what gets return. Tranform the array
    in some other resource.
*/

$mappedPosts = array_map(function ($post) {
    return ['title' => $post->title];
}, $posts);

echo '<h1>Array Map: </h1>';

var_dump($mappedPosts);

/* Array Column:
    It is used to return an specific key value or public (mandatory)
    properties of a class.
*/

$postTitles = array_column($posts, 'title');

echo '<h1>Array Column: </h1>';

var_dump($postTitles);

$postTitles = array_column($posts, 'title', 'author');

echo '<h1>Array Column with index key: </h1>';

var_dump($postTitles);
