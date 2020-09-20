<?php

namespace uzone\Components;

use uzone\Collections\NavigationItems;

class Navigation
{
  /**
   * @var NavigationItems
   */
  protected $_items;

  /**
   * @param NavigationItems $items
   */
  public function __construct($items = [])
  {
    $this->_items = $items;
    return $this;
  }

  /**
   * @return NavigationItems
   */
  public function items()
  {
    return $this->_items;
  }

  public function setItems($items)
  {
    $this->_items = $items;
  }
}