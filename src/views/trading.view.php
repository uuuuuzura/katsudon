<?php include __DIR__ . '/includes/header.include.php' ?>

<main>
  <h1 class="pagename">Trading</h1>
  <section class="section">
    <h2 class="section__header section__header--step-1">Guidelines</h2>
    <ul>
      <li>Please conduct all trades under <a href="#">this Dreamwidth entry</a>
      <li>Only cards in this section are eligable for trade</li>
      <li>There is no limit on the amount traded at one time</li>
    </ul>
  </section>
  <section class="section">
    <h2 class="section__header section__header--step-2">Cards</h2>
    <div class="section__container">
      <?php if (sizeof($tradingCards) === 0) {
        echo "<p>Currently Empty!</p>";
      } else {
        foreach ($tradingCards as $card) {
          echo "<img alt=\"" . $card['slug'] . "\" src=\"..\..\img\cards\\" . $card['slug'] . ".gif\" />";
        }
      } ?>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.include.php' ?>