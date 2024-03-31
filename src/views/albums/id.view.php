<?php include Loader::basePath('src/views/includes/header.include.php') ?>

<main>
  <h1 class="pagename"><?php echo $album['label'] ?></h1>
  <section class="section">
    <div class="section__container">
      <?php foreach ($decks as $deck) {
        $deck->renderDeck();
      } ?>
    </div>
  </section>
</main>

<?php include Loader::basePath('src/views/includes/footer.include.php') ?>