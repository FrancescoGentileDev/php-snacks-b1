<style>
    .margin {
        margin-top: 4rem;
        background-color: grey;
    }
</style>

<?php
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$keys = array_keys($posts);

for($i = 0; $i < count($keys); $i++) {
    $post = $posts[$keys[$i]];
    ?>
    <div class="margin">
        <h2>Giorno: <?= $keys[$i] ?></h2>
    <?php
    for($j = 0; $j < count($post); $j++) {
    
?>
    
        <h1><?= $post[$j]['title'] ?></h1>
        <p><?= $post [$j]['text'] ?></p>
        <p><?= $post[$j]['author'] ?></p>

    <?php
    }
    ?>
    </div>
    <?php
} 