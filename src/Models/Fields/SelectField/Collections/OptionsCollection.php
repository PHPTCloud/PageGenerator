<?php
/**
 * @class OptionsCollection
 * @package PageGenerator\Models\Fields\SelectField\Collections
 */

namespace PageGenerator\Models\Fields\SelectField\Collections;

use PageGenerator\Collections\BaseCollections\BaseCollection;
use PageGenerator\Models\Fields\SelectField\Models\OptionModel;

class OptionsCollection extends BaseCollection
{
  /**
   * @var string
   */
  protected $_MODEL = OptionModel::class;
}