<?php 

namespace AkmalHanif\Belajar;

class Customer
{
  function __construct(private string $name)
  {
    
  }

  public function sayHello(string $name):string
  {
    return "Hello $name, Nama saya $this->$name";
  }
}


?>