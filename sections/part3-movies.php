<?php

function formatDuration($totalMins) {
    $hours = intval($totalMins / 60);

    $mins =  $totalMins - ($hours * 60);

    return $hours . "h:" . str_pad($mins, 2, "0", STR_PAD_LEFT) . "min";
}

$moviesList = [
    ["title" => "Yeelen (Mali, 1987)", "duration" => 90],
    ["title" => "La teta asustada (Perú, 2009)", "duration" => 102],
    ["title" => "La vida útil (Uruguay, 2010)", "duration" => 84],
    ["title" => "Bal (Miel) (Turquía, 2010)", "duration" => 102],
    ["title" => "Timbuktu (Mauritania, 2014)", "duration" => 120]
];
$numberOfMovies = count($moviesList);

$totalMins = 0;
foreach ($moviesList as $movie) {
  $totalMins += $movie["duration"];
}
$totalDurationMins = formatDuration($totalMins);

?>
<section id="movies" class="content-section p-6 rounded-2xl shadow-sm ring-1 ring-slate-100 mb-6 max-w-4xl mx-auto hidden">
  <h2 class="text-2xl font-semibold mb-3">🎬 Maratón de Películas</h2>
  <p class="mb-3 text-sm text-gray-600">Reservadas <?php echo $totalDurationMins; ?> para ver <?php echo $numberOfMovies; ?> películas:</p>
  <div class="overflow-x-auto rounded-xl border border-gray-100 bg-white">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Película</th>
          <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Duración (min)</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        <?php foreach($moviesList as $movie): ?>
        <tr class="hover:bg-gray-50">
          <td class="px-4 py-3 text-sm"><?php echo $movie['title']; ?></td>
          <td class="px-4 py-3 text-sm"><?php echo formatDuration($movie['duration']); ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>
