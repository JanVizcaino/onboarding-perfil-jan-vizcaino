<?php
$name = "Jan";
$surnames = "Vizcaíno Boixadós";
$birthdate = "18/12/2006";
?>

<section id="profile" class="content-section p-6 rounded-2xl shadow-sm ring-1 ring-slate-100 mb-6 max-w-4xl mx-auto">
  <h2 class="text-2xl font-semibold mb-3">👤 Perfil</h2>
  <div class="bg-white p-5 rounded-xl shadow border border-gray-100 flex flex-col items-start gap-2">
    <p class="text-lg font-semibold leading-tight"><?php echo $name . " " . $surnames; ?></p>
    <p class="text-sm text-gray-500">📅 Nacimiento: <?php echo $birthdate; ?></p>
  </div>
</section>
