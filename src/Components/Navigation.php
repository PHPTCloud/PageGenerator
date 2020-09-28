<?php

namespace PageGenerator\Components;

use PageGenerator\Collections\NavigationItems;

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
}