<?php
$favoriteDish = "Pizza Peperoni";
$price = 12.5;
?>
<section id="menu" class="content-section p-6 bg-red-100 rounded-lg shadow-md mb-6 max-w-3xl mx-auto hidden">
  <h2 class="text-2xl font-bold mb-2">🍴 Menú Favorito</h2>
  <div class="bg-white p-4 rounded-md shadow flex justify-between items-center">
    <span class="font-semibold"><?php echo $favoriteDish; ?></span>
    <span class="text-gray-700 font-medium"><?php echo number_format($price, 2, ',', '.'); ?> €</span>
  </div>
</section>
