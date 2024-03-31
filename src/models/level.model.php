<?php

class Level
{
    protected string $label;
    protected string $bannerImg;

    public function __construct(int $cardCount, $db)
    {
        $level = $db->query("SELECT label, bannerImg FROM levels WHERE maxCardCount = :cardCount", ['cardCount' => $this->roundMaxCardNumber($cardCount)])->fetch();
        $this->label = $level['label'];
        $this->bannerImg = $level['bannerImg'];
    }

    private function roundMaxCardNumber($cardCount)
    {
        if ($cardCount <= 800) {
            return ceil($cardCount / 100) * 100;
        }

        if ($cardCount <= 2400) {
            return ceil($cardCount / 200) * 200;
        }

        return ceil($cardCount / 300) * 300;
    }

    public function renderBanner()
    {
        echo '<img class="levelbanner" src="img/level-banners/' . $this->bannerImg . '" alt="' . $this->label . '">';
    }
}