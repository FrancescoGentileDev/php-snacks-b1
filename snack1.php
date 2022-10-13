<?php
/*Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/

$plays = [
    [
        'casa' => [
            'squadra' => 'olimpia',
            'punteggio' => 30
        ],

            'ospite' => [
                'squadra' => 'cantu',
                'punteggio' => 40
            ],

    ],
    [
        'casa' => [
            'squadra' => 'milazzo',
            'punteggio' => 10
        ],

            'ospite' => [
                'squadra' => 'bitonto',
                'punteggio' => 20
            ],

    ],
    [
        'casa' => [
            'squadra' => 'olbia',
            'punteggio' => 80
        ],

            'ospite' => [
                'squadra' => 'isolani',
                'punteggio' => 30
            ],
        ]

];


for ($i = 0; $i < count($plays); $i++) {
    $play = $plays[$i] ;
    ?>
    <div>
      <p> <?= $play['casa']['squadra'] ?> - <?= $play['ospite']['squadra'] ?>| <?= $play['casa']['punteggio'] ?>-<?= $play['ospite']['punteggio'] ?></p>  
    </div>
    <?php
}
