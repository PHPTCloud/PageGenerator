<?php
/**
 * @class OptionsCollection
 * @package uzone\Models\Fields\SelectField\Collections
 */

namespace uzone\Models\Fields\SelectField\Collections;

use uzone\Collections\BaseCollections\BaseCollection;
use uzone\Models\Fields\SelectField\Models\OptionModel;

class OptionsCollection extends BaseCollection
{
  /**
   * @var string
   */
  protected $_MODEL = OptionModel::class;
}