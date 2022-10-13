<?php
$paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod vitae hic, dolor sint accusantium aut accusamus praesentium odit porro fugit temporibus harum voluptatum. Eligendi incidunt dolore deleniti, possimus fugiat pariatur!";

echo $paragraph;

$tokens = explode(".", $paragraph);
foreach ($tokens as $tok) {
   ?>
   <p><?= $tok ?></p>
   <?php
}