<?php
/**
 * @class IconsCollection
 * @package uzone\Collections
 */

namespace uzone\Collections;

use uzone\Collections\BaseCollections\BaseCollection;
use uzone\Models\Icon;

class IconsCollection extends BaseCollection
{
  /**
   * @var Icon
   */
  protected $_MODEL = Icon::class;
}