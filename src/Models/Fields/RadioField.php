<?php
/**
 * @class RadioField
 * @package uzone\Models\Fields
 */

namespace uzone\Models\Fields;

use uzone\Models\Fields\BaseField;
use uzone\Models\Fields\RadioField\Collections\RadioItemsCollection;

class RadioField extends BaseField
{
  /**
   * @var RadioItemsCollection
   */
  protected $_items;

  /**
   * @param RadioItemsCollection $items
   * @return RadioField
   */
  public function setItems(?RadioItemsCollection $items): RadioField
  {
    $this->_items = $items;
    return $this;
  }

  /**
   * @return RadioItemsCollection
   */
  public function items()
  {
    return $this->_items;
  }
}