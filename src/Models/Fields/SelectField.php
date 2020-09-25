<?php
/**
 * @class SelectField
 * @package uzone\Models\Fields
 */

namespace uzone\Models\Fields;

use uzone\Models\Fields\BaseField;
use uzone\Models\Fields\SelectField\Collections\OptionsCollection;

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