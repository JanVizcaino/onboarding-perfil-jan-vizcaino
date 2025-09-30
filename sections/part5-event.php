<?php
$registration = 50;
$optionalWorkshop = 20;
$totalCost = $registration + $optionalWorkshop;
?>
<section id="event" class="content-section p-6 bg-blue-100 rounded-lg shadow-md mb-6 max-w-3xl mx-auto hidden">
  <h2 class="text-2xl font-bold mb-2">💳 Coste de Evento</h2>
  <div class="bg-white p-4 rounded-md shadow">
    <p>Inscripción: <?php echo number_format($registration, 2, ',', '.'); ?> €</p>
    <p>Taller adicional: <?php echo number_format($optionalWorkshop, 2, ',', '.'); ?> €</p>
    <hr class="my-2">
    <p class="font-semibold">Total: <?php echo number_format($totalCost, 2, ',', '.'); ?> €</p>
  </div>
</section>
