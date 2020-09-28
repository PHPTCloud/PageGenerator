<?php
/**
 * @class IconsCollection
 * @package PageGenerator\Collections
 */

namespace PageGenerator\Collections;

use PageGenerator\Collections\BaseCollections\BaseCollection;
use PageGenerator\Models\Icon;

class IconsCollection extends BaseCollection
{
  /**
   * @var Icon
   */
  protected $_MODEL = Icon::class;
}