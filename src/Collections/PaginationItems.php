<?php
/**
 * @class PaginationItems
 * @package PageGenerator\Collections
 */

namespace PageGenerator\Collections;

use PageGenerator\Collections\BaseCollections\BaseCollection;
use PageGenerator\Models\PaginationItem;

class PaginationItems extends BaseCollection
{
  /**
   * @var PaginationItem
   */
  protected $_MODEL = PaginationItem::class;
}