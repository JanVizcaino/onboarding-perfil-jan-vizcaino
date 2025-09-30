<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="./assets/css/output.css">
</head>
<body class="bg-white text-slate-900">
  <header class="p-4 border-b">
    <nav class="max-w-3xl mx-auto flex items-center justify-between">
      <div class="font-heading text-lg">Mi Perfil</div>
      <div>
            <?php
            require_once __DIR__ . '/tabs.php';
            ?>
      </div>
    </nav>
  </header>
