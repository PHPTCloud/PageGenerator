<?php

namespace uzone\Components;

class Navigation
{
  /**
   * @var array
   */
  protected $_items;


  public function __construct(?array $items = [])
  {
    $this->_items = $items;
  }

  /**
   * @return array
   */
  public function items(): array
  {
    return $this->_items;
  }
}