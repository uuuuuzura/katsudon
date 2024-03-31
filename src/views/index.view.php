<?php include Loader::basePath('src/views/includes/header.include.php') ?>

<main>
  <h1 class="pagename">Index</h1>
  <section class="section">
    <h2 class="section__header section__header--step-1">Statistics</h2>
    <div class="section__container">
      <?php $level->renderBanner(); ?>
      <dl class="desclist">
        <dt class="desclist__term">Name</dt>
        <dd class="desclist__definition">Quails</dd>

        <dt class="desclist__term">Status</dt>
        <dd class="desclist__definition">Active</dd>

        <dt class="desclist__term">Last Updated</dt>
        <dd class="desclist__definition"><?php echo date_format($lastUpdated, 'jS F Y') ?></dd>

        <dt class="desclist__term">Card Count</dt>
        <dd class="desclist__definition"><?php echo $cardCount ?></dd>

        <dt class="desclist__term">Masterd Decks</dt>
        <dd class="desclist__definition">0</dd>
      </dl>
    </div>
  </section>
  <section class="section">
    <h2 class="section__header section__header--step-2">Inventory</h2>
    <div class="section__container">
      <p>Currently Empty!</p>
    </div>
  </section>
  <section class="section">
    <h2 class="section__header section__header--step-3">Sitemap</h2>
    <dl class="desclist">
      <dt class="desclist__term">Index</dt>
      <dd class="desclist__definition">Features site statistics, an inventory and a site map (you are here!)</dd>

      <dt class="desclist__term">Albums</dt>
      <dd class="desclist__definition">Mass decks for various series. I am actively collecting these cards and consider them top priority.</dd>

      <dt class="desclist__term">Trading</dt>
      <dd class="desclist__definition">Cards I am not currently, or do not plan on collecting. Feel free to make trade offers on anything on this page.</dd>

      <dt class="desclist__term">Mastered</dt>
      <dd class="desclist__definition">Record of all mastered decks.</dd>

      <dt class="desclist__term">Logs</dt>
      <dd class="desclist__definition">Records of all cards aquired and traded.</dd>
    </dl>
  </section>
</main>

<?php include Loader::basePath('src/views/includes/footer.include.php') ?>