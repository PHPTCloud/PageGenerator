<?php
/**
 * @class PaginationItems
 * @package uzone\Collections
 */

namespace uzone\Collections;

use uzone\Collections\BaseCollections\BaseCollection;
use uzone\Models\PaginationItem;

class PaginationItems extends BaseCollection
{
  /**
   * @var PaginationItem
   */
  protected $_MODEL = PaginationItem::class;
}