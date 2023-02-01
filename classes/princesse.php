<?php
class princesse extends Personnage{
    private bool $saved;
    public $x = 450;
    public $y = 450;

    /**
     * @param bool $saved
     * @param int $x
     * @param int $y
     */
    public function __construct(bool $saved, int $x, int $y)
    {
        $this->saved = $saved;
        $this->x = $x;
        $this->y = $y;
    }

}
