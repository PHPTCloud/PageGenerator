<?php

namespace uzone\Models\BaseModels;

class BaseModel
{
  public $property = 1;

  protected $_property = 2;

  public function setProperty(?string $property)
  {
    $this->property = $property;
  }

  function fromArray(?array $array = [])
  {
    foreach($array as $key => $value)
    {
      $method = 'set' . ucfirst($key);

      echo $method . '<br>';

      if(method_exists($this, $method)) {
        $this->$method($array[$key]);
      }
    }
  }
}