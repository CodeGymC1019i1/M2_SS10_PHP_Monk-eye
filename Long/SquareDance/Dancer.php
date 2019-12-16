<?php


class Dancer
{
public $name;
public $gender;
public $next;
public function __construct($name,$gender)
{
    $this->name = $name;
    $this->gender = $gender;
    $this->next = NULL;
}
}