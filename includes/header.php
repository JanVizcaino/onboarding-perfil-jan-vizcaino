<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="./assets/css/output.css">
</head>
<body class="bg-white text-slate-900 min-h-screen flex flex-col antialiased font-sans">
  <header class="p-4 bg-white/60 backdrop-blur-sm shadow-sm border-b border-transparent flex-none">
    <nav class="max-w-4xl mx-auto flex items-center justify-between px-4 sm:px-6">
      <div class="text-xl font-semibold tracking-tight">Un poco sobre mí</div>
      <div class="hidden sm:block">
            <?php
            require_once __DIR__ . '/tabs.php';
            ?>
      </div>
    </nav>
  </header>
