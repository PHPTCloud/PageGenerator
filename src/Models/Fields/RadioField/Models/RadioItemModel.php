<?php
/**
 * @class RadioItemModel
 * @package uzone\Models\Fields\RadioField\Models
 */

namespace uzone\Models\Fields\RadioField\Models;

use uzone\Models\BaseModels\BaseModel;

class RadioItemModel extends BaseModel
{
  /**
   * @var string
   */
  protected $_title;

  /**
   * @var string
   */
  protected $_value;

  /**
   * @return string
   */
  public function getTitle(): string
  {
    return $this->_title;
  }

  /**
   * @param string $title
   * @return RadioItemModel
   */
  public function setTitle(?string $title): RadioItemModel
  {
    $this->_title = $title;
    return $this;
  }

  /**
   * @return string
   */
  public function getValue(): string
  {
    return $this->_value;
  }

  /**
   * @param string $value
   * @return RadioItemModel
   */
  public function setValue(?string $value): RadioItemModel
  {
    $this->_value = $value;
    return $this;
  }
}