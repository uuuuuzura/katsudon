<?php
  abstract class Colour {
    const Red = 'red';
    const Orange = 'orange';
    const Yellow = 'yellow';
    const Green = 'green';
    const Blue = 'blue';
    const Purple = 'purple';
    const Brown = 'brown';
    const Grey = 'grey';
    const Special = 'special';
  }

  class Deck {
    protected string $label;
    protected string $slug;
    protected string $colour;
    protected array $collected;

    public function __construct(string $label, string $colour, array $collected = []) {
      $this->label = $label;
      $this->slug = strtolower(str_replace(" ", "", $label));
      $this->colour = $colour;
      $this->collected = $collected;
    }

    public function renderDeck() {
      echo "<div class=\"deck\">";
      echo "<h2 class=\"deck__header deck__header--" . $this->colour . "\">" . $this->label . "</h2>";
      echo "<table>";
      for ($i = 1; $i <= 20; $i++) {
        $cardNumber = in_array($i, $this->collected) ? sprintf('%02d', $i) : '00';

        if ($i % 5 === 1) {
          echo "<tr>";
        }
        echo "<td>";
        echo "<img src=\"..\..\img\cards\\" . $this->slug . $cardNumber . ".gif\" />";
        echo "</td>";
        if($i % 5 === 0 ) {
          echo "</tr>";
        }
      }
      echo "</table>";
      echo "</div>";
    }
  }

  $decks = array(
    new Deck("Mourning", Colour::Green),
    new Deck("Judecca", Colour::Blue),
    new Deck("Cleaver", Colour::Purple),
    new Deck("Coolene", Colour::Blue, [1, 16]),
    new Deck("Hawk Party", Colour::Blue),
    new Deck("Narcoleptic", Colour::Yellow),
    new Deck("Artistic", Colour::Orange),
    new Deck("Everybirdie", Colour::Special),
    new Deck("Coo", Colour::Brown, [6]),
    new Deck("Playbirdie", Colour::Grey),
    new Deck("Fantail", Colour::Blue),
    new Deck("Red Scarf", Colour::Red),
    new Deck("Quail", Colour::Yellow),
    new Deck("Holiday Star", Colour::Red),
  )
?>

<main>
  <h1 class="pagename">Hatoful Boyfriend</h1>
  <section class="section">
    <div class="section__container">
      <?php foreach ($decks as $deck) { $deck->renderDeck(); } ?>
    </div>
    </section>
</main>