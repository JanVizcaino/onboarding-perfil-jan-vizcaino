<?php
$songTitle = "Bohemian Rhapsody";
$artist = "Queen";
?>
<section id="music" class="content-section p-6 bg-yellow-100 rounded-lg shadow-md mb-6 max-w-3xl mx-auto hidden">
  <h2 class="text-2xl font-bold mb-2">🎵 Música Favorita</h2>
  <div class="bg-white p-4 rounded-md shadow flex flex-col items-start">
    <p class="text-lg font-semibold"><?php echo $songTitle; ?></p>
    <p class="text-gray-600">por <?php echo $artist; ?></p>
  </div>
</section>
