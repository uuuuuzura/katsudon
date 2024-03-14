<?php

class Album
{
    public string $label;
    protected string $slug;

    public function __construct(string $label, string $slug)
    {
        $this->label = $label;
        $this->slug = $slug;
    }

    public function renderCover()
    {
        $imgSrc = 'img\album-covers\\' . $this->slug . '.png';
        $aHref = '/albums/' . $this->slug;

        echo '<a class="albumcover" href="' . $aHref . '"><img src=' . $imgSrc . ' alt="' . $this->label . '"/></a>';
    }
}