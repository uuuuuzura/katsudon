<?php include Loader::basePath('src/views/includes/header.include.php') ?>

<main>
  <h1 class="pagename">Logs</h1>
  <section class="section section--logs">
    <section class="section">
      <h2 class="section__header section__header--step-1">Activity</h2>
      <div class="section__container">
        <?php renderActivityLogs($logs) ?>
      </div>
    </section>
    <section class="section">
      <h2 class="section__header section__header--step-2">Trading</h2>
      <div class="section__container">
        <?php renderTradingLogs($logs) ?>
      </div>
    </section>
  </section>
</main>

<?php include Loader::basePath('src/views/includes/footer.include.php') ?>