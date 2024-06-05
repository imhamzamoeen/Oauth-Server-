<?php

namespace App\Class;

class task
{
    protected string $name = "hamza";

    public function __construct()
    {
        dump("class");
    }
    public function run(callable $callback)
    {
        //both are same
      return  call_user_func_array($callback, array($this->name));
        return $callback($this->name);
    }
}
