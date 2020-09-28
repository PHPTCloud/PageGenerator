<?php
/**
 * @class OptionModel
 * @package PageGenerator\Models\Fields\SelectField\Models
 */

namespace PageGenerator\Models\Fields\SelectField\Models;

use PageGenerator\Models\BaseModels\BaseModel;

class OptionModel extends BaseModel
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
   * @return OptionModel
   */
  public function setTitle(?string $title): OptionModel
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
   * @return OptionModel
   */
  public function setValue(?string $value): OptionModel
  {
    $this->_value = $value;
    return $this;
  }
}