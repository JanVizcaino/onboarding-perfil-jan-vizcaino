<?php
require_once __DIR__ . '/includes/header.php';
?>

<main class="max-w-3xl mx-auto p-6">
  <div id="paneles">
    <?php include __DIR__ . '/sections/part1-profile.php'; ?>
    <?php include __DIR__ . '/sections/part2-music.php'; ?>
    <?php include __DIR__ . '/sections/part3-movies.php'; ?>
    <?php include __DIR__ . '/sections/part4-menu.php'; ?>
    <?php include __DIR__ . '/sections/part5-event.php'; ?>
    <?php include __DIR__ . '/sections/part6-travel.php'; ?>
  </div>
</main>

<script src="./assets/js/tabs.js"></script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
