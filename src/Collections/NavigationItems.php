<?php

namespace PageGenerator\Collections;

use PageGenerator\Collections\BaseCollections\BaseCollection;
use PageGenerator\Models\NavigationItem;

class NavigationItems extends BaseCollection
{
  /**
   * @var string
   */
  protected $_MODEL = NavigationItem::class;
}