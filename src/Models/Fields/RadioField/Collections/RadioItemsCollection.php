<?php
/**
 * @class RadioItemsCollection
 * @package uzone\Models\Fields\RadioField\Collections
 */

namespace uzone\Models\Fields\RadioField\Collections;

use uzone\Collections\BaseCollections\BaseCollection;
use uzone\Models\Fields\RadioField\Models\RadioItemModel;

class RadioItemsCollection extends BaseCollection
{
  /**
   * @var string
   */
  protected $_MODEL = RadioItemModel::class;
}