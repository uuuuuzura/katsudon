<?php

class Log
{
    protected string $label;
    protected string $date;
    public string $type;
    protected array $cardsReceived;
    protected array $cardsSubmitted;

    public function __construct(string $label, string $date, string $type, $cardsReceived = null, $cardsSubmitted = null)
    {
        $this->label = $label;
        $this->date = $date;
        $this->type = $type;
        $this->cardsReceived = is_null($cardsReceived) ? [] : explode(',', $cardsReceived);
        $this->cardsSubmitted = is_null($cardsSubmitted) ? [] : explode(',', $cardsSubmitted);
    }

    public function renderLog()
    {
        echo '<article class="log">';
        echo '<h3 class="log__header">' . $this->date . '</h3>';
        echo '<dl class="desclist">';
        echo '<dt class="desclist__term">' . $this->label . '</dt>';
        echo '<dd class="desclist__definition"> '
            . (sizeof($this->cardsReceived) !== 0 ? "received <strong>" . implode(', ', $this->cardsReceived) . "</strong>" : '')
            . (sizeof($this->cardsReceived) !== 0 && sizeof($this->cardsSubmitted) !== 0 ? " / " : "")
            . (sizeof($this->cardsSubmitted) !== 0 ? "submitted <strong>" . implode(', ', $this->cardsSubmitted) : '') . "</strong>" . '</dd>';
        echo '</dl>';
        echo '</article>';
    }
}