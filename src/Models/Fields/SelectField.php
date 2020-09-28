<?php
/**
 * @class SelectField
 * @package PageGenerator\Models\Fields
 */

namespace PageGenerator\Models\Fields;

use PageGenerator\Models\Fields\BaseField;
use PageGenerator\Models\Fields\SelectField\Collections\OptionsCollection;

class SelectField extends BaseField
{
  /**
   * @var OptionsCollection
   */
  protected $_items;

  /**
   * @param OptionsCollection $items
   * @return SelectField
   */
  public function setItems(?OptionsCollection $items): SelectField
  {
    $this->_items = $items;
    return $this;
  }

  /**
   * @return OptionsCollection
   */
  public function items()
  {
    return $this->_items;
  }
}