<?php

namespace uzone\Models\BaseModels;

class BaseModel
{

  /**
   * @param array $array
   * @return this
   */
  function fromArray(?array $array = [])
  {
    foreach($array as $key => $value)
    {
      $method = 'set' . ucfirst($key);

      if(method_exists($this, $method)) {
        $this->$method($value);
      }
    }

    return $this;
  }
}