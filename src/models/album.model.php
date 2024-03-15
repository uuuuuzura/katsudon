<?php

class Album
{
    protected int $id;
    public string $label;
    protected string $slug;

    public function __construct(int $id, string $label, string $slug)
    {
        $this->id = $id;
        $this->label = $label;
        $this->slug = $slug;
    }

    public function renderCover()
    {
        $imgSrc = 'img\album-covers\\' . $this->slug . '.png';
        $aHref = '/album?id=' . $this->id;

        echo '<a class="albumcover" href="' . $aHref . '"><img src=' . $imgSrc . ' alt="' . $this->label . '"/></a>';
    }
}