<?php include __DIR__ . '/includes/header.include.php' ?>

<main>
  <h1 class="pagename">Albums</h1>
  <section class="section">
    <h2 class="section__header section__header--step-1">Open Albums</h2>
    <div class="section__container">
      <?php foreach ($albums as $album) {
        $album->renderCover();
      } ?>
    </div>
  </section>
  <section class="section">
    <h2 class="section__header section__header--step-2">Complete Albums</h2>
    <div class="section__container">
      <p>None</p>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.include.php' ?>