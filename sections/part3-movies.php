<?php
$totalHours = 8;
$numberOfMovies = 3;
$moviesList = [
    ["title" => "Inception", "duration" => 2.5],
    ["title" => "Interstellar", "duration" => 3],
    ["title" => "The Dark Knight", "duration" => 2.5]
];
?>
<section id="movies" class="content-section p-6 bg-green-100 rounded-lg shadow-md mb-6 max-w-3xl mx-auto hidden">
  <h2 class="text-2xl font-bold mb-2">🎬 Maratón de Películas</h2>
  <p class="mb-2">Reservadas <?php echo $totalHours; ?> horas para ver <?php echo $numberOfMovies; ?> películas:</p>
  <table class="min-w-full bg-white rounded-md shadow divide-y divide-gray-200">
    <thead>
      <tr>
        <th class="px-4 py-2 text-left">Película</th>
        <th class="px-4 py-2 text-left">Duración (h)</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($moviesList as $movie): ?>
      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2"><?php echo $movie['title']; ?></td>
        <td class="px-4 py-2"><?php echo $movie['duration']; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>
