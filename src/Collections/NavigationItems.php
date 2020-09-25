<?php

namespace uzone\Collections;

use uzone\Collections\BaseCollections\BaseCollection;
use uzone\Models\NavigationItem;

class NavigationItems extends BaseCollection
{
  /**
   * @var string
   */
  protected $_MODEL = NavigationItem::class;
}