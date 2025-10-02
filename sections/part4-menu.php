<?php
$favoriteDish = "Pizza Peperoni";
$price = 12.5;
?>
<section id="menu" class="content-section p-6 rounded-2xl shadow-sm ring-1 ring-slate-100 mb-6 max-w-4xl mx-auto hidden">
  <h2 class="text-2xl font-semibold mb-3">🍴 Menú Favorito</h2>
  <div class="bg-white p-5 rounded-xl shadow border border-gray-100 flex justify-between items-center">
    <span class="font-semibold"><?php echo $favoriteDish; ?></span>
    <span class="text-sm text-gray-700 font-medium"><?php echo number_format($price, 2, ',', '.'); ?> €</span>
  </div>
</section>
