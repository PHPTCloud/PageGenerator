<?php
/**
 * @class RadioField
 * @package PageGenerator\Models\Fields
 */

namespace PageGenerator\Models\Fields;

use PageGenerator\Models\Fields\BaseField;
use PageGenerator\Models\Fields\RadioField\Collections\RadioItemsCollection;

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