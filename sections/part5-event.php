<?php
$registration = 50;
$optionalWorkshop = 20;
$totalCost = $registration + $optionalWorkshop;
?>
<section id="event" class="content-section p-6 rounded-2xl shadow-sm ring-1 ring-slate-100 mb-6 max-w-4xl mx-auto hidden">
  <h2 class="text-2xl font-semibold mb-3">💳 Coste de Evento</h2>
  <div class="bg-white p-5 rounded-xl shadow border border-gray-100 space-y-2">
    <p class="text-sm">Inscripción: <?php echo number_format($registration, 2, ',', '.'); ?> €</p>
    <p class="text-sm">Taller adicional: <?php echo number_format($optionalWorkshop, 2, ',', '.'); ?> €</p>
    <hr class="my-1 border-gray-100">
    <p class="font-semibold">Total: <?php echo number_format($totalCost, 2, ',', '.'); ?> €</p>
  </div>
</section>
