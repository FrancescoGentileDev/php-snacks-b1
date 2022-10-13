<?php
/*Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.*/

$classe = [
    [
        "nome" => 'pasquale',
        'cognome' => 'brabbo',
        'voti' => [
            'storia' => 8,
            'matematica' => 6,
            'italiano' => 7,
            'edu fisica' => 3,
            'filosofia' => 7,
        ]
    ],
    [
        "nome" => 'michele',
        'cognome' => 'giocco',
        'voti' => [
            'storia' => 3,
            'matematica' => 5,
            'italiano' => 8,
            'edu fisica' => 4,
            'filosofia' => 6,
        ]
    ],
    [
        "nome" => 'marta',
        'cognome' => 'pane',
        'voti' => [
            'storia' => 9,
            'matematica' => 9,
            'italiano' => 9,
            'edu fisica' => 9,
            'filosofia' => 9,
        ]
    ],
];

foreach ($classe as $i => $alunno) {
    $sum = 0;
?>
    <div>
        <h1> <?= $alunno['nome'] ?> <?= $alunno['cognome'] ?> </h1>
        <?php
        foreach ($alunno['voti'] as $materia => $voto) {
            $sum += $voto
        ?>
            <p><?= $materia ?>: <?= $voto ?>/10  </p>
    <?php
        }
        $media = $sum / count($alunno['voti']);
        ?>
        <p>MEDIA: <?= $media ?> </p>
        <?php
    }
