<?php

/**
 * Class Pet
 * Represents a pet object with name and color
 * @author Jake Donaldson
 * @copyright 2021
 */

class Pet
{
    private $_name;
    private $_color;

    /**
     * Pet constructor.
     * @param string $name the pet's name, default unknown
     * @param string $color the pet's color, default unknown
     * @return void
     */
    function __construct($name="unknown", $color="unknown")
    {
        $this->name = $name;
        $this->color = $color;
    }

    /**
     * getName() function
     * @return String the pet's name
     */
    function getName()
    {
        return $this->_name;
    }

    /**
     * setName() function
     * @param $name the pet's name
     * @return void
     */
    function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * getColor() function
     * @return String the pet's color
     */
    function getColor()
    {
        return $this->_color;
    }

    /**
     * setColor() function
     * @param String $color the pet's color
     * return void
     */
    function setColor($color)
    {
        $this->_color = $color;
    }

    /**
     * eat() function
     * return void
     */
    function eat()
    {
        echo $this->name . " is eating<br>";
    }

    /**
     * talk() function
     * return void
     */
    function talk()
    {
        echo $this->name . " is talking<br>";
    }

    /**
     * sleep() function
     * return void
     */
    function sleep()
    {
        echo $this->name . " is sleeping<br>";
    }
}