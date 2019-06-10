<?php

class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }

    public function resize($random)
    {
        parent::resize($random);
        $this->width += $random;
        // TODO: Change the autogenerated stub
    }
}
