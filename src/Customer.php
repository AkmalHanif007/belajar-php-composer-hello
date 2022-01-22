<?php 

namespace AkmalHanif\Belajar;

class Customer
{
  function __construct(private string $name)
  {
    
  }

  public function sayHello(string $name = "guest"):string
  {
    return "Hello $name, Nama saya $this->$name";
  }
}


?>