<?php

class Level
{
    protected string $label;
    protected string $bannerImg;

    public function __construct(string $label, string $bannerImg)
    {
        $this->label = $label;
        $this->bannerImg = $bannerImg;
    }

    public function renderBanner()
    {
        echo '<img class="levelbanner" src="../../img/level-banners/' . $this->bannerImg . '" alt="' . $this->label . '">';
    }
}