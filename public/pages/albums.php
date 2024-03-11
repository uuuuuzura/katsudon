<?php
  class Album {
    public string $label;
    protected string $slug;

    public function __construct(string $label, string $slug) {
      $this->label = $label;
      $this->slug = $slug;
    }

    public function renderCover() {
      $imgSrc = 'img\album-covers\\' . $this->slug . '.png';
      $aHref = '/albums/' . $this->slug;

      echo '<a class="albumcover" href="' . $aHref . '"><img src=' . $imgSrc . ' alt="' . $this->label . '"/></a>';
    }
  }

  function sortAlbumsByName(Album $albumA, Album $albumB) {
    return $albumA->label > $albumB->label ? 1 : -1;
  }

  $albums = array(
    new Album('Hatoful Boyfriend', 'hatoful-boyfriend'),
    new Album('Nu:Carnival', 'nu-carnival'),
    new Album('Akiba Maid War', 'akiba-maid-war'),
  );

  usort($albums, "sortAlbumsByName");
?>

<main>
  <h1 class="pagename">Albums</h1>
  <section class="section">
    <h2 class="section__header section__header--step-1">Open Albums</h2>
    <div class="section__container">
      <?php foreach ($albums as $album) { $album->renderCover(); } ?>
    </div>
  </section>
  <section class="section">
    <h2 class="section__header section__header--step-2">Complete Albums</h2>
    <div class="section__container">
      <p>None</p>
    </div>
  </section>
</main>
