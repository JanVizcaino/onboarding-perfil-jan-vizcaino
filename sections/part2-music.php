<?php
$songTitle = "Canpesino";
$artist = "Canserbero";
$duration = "5:13"; 
?>
<section id="music" class="content-section p-6 rounded-2xl shadow-sm ring-1 ring-slate-100 mb-6 max-w-4xl mx-auto hidden">
  <h2 class="text-2xl font-semibold mb-3">🎵 Música Favorita</h2>
  <div class="bg-white p-5 rounded-xl shadow border border-gray-100 flex flex-col items-start gap-1">
    <p class="text-lg font-semibold"><?php echo $songTitle; ?></p>
    <p class="text-sm text-gray-500">por <?php echo $artist; ?></p>
    <p class="text-xs text-gray-400">Duración: <?php echo $duration; ?></p>
  </div>
</section>
