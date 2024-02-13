<?php
require_once 'functions.php';
require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song1 = new Song('blackbird', 200);
$song2 = new Song('yesterday',444);

$playlist->addSong($song1);
$playlist->addSong($song2);


// foreach($playlist->songs as $song)
// {
//   print $song->name.PHP_EOL;
// }

if($playlist->getLength() < 10)
echo "short playlist... " . PHP_EOL;