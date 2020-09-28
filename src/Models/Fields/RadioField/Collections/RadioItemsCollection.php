<?php
/**
 * @class RadioItemsCollection
 * @package PageGenerator\Models\Fields\RadioField\Collections
 */

namespace PageGenerator\Models\Fields\RadioField\Collections;

use PageGenerator\Collections\BaseCollections\BaseCollection;
use PageGenerator\Models\Fields\RadioField\Models\RadioItemModel;

class RadioItemsCollection extends BaseCollection
{
  /**
   * @var string
   */
  protected $_MODEL = RadioItemModel::class;
}