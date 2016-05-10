<?php
include ('data.php');
foreach ($sports as $clef => $valeur) {
    echo '<a href="/">', $sports[$clef]['nom'], '</a><br>';
    echo '<a href="/">', $sports[$clef]['prix'], '</a><br>';
    echo '<a href="/">', $sports[$clef]['photo'], '</a><br>';
}

foreach ($jeunes as $clef => $valeur) {
    echo '<a href="/">', $jeunes[$clef]['nom'], '</a><br>';
    echo '<a href="/">', $jeunes[$clef]['prix'], '</a><br>';
    echo '<a href="/">', $jeunes[$clef]['photo'], '</a><br>';
}

foreach ($action as $clef => $valeur) {
    echo '<a href="/">', $action[$clef]['nom'], '</a><br>';
    echo '<a href="/">', $action[$clef]['prix'], '</a><br>';
    echo '<a href="/">', $action[$clef]['photo'], '</a><br>';
}

foreach ($reflexion as $clef => $valeur) {
    echo '<a href="/">', $reflexion[$clef]['nom'], '</a><br>';
    echo '<a href="/">', $reflexion[$clef]['prix'], '</a><br>';
    echo '<a href="/">', $reflexion[$clef]['photo'], '</a><br>';
}
?>