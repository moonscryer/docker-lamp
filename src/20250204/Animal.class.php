<?php

class Animal
{ // Properties from the object
    public $name;
    public $alive;
    public $image;

    function __construct($n, $l, $image = 'default.png')
    {
        $this->name = $n;
        $this->alive = $l;
        $this->image = $image;
    }
    function getName()
    {
        return $this->name;
    }
    function setName($name)
    {
        return $this->name = $name;
    }
    function getAlive()
    {
        return $this->alive;
    }
    function dieDieDie()
    {
        $this->alive = FALSE;
    }
}
