<?php
/**
 * @class BaseField
 * @package uzone\Models\Fields
 */

namespace uzone\Models\Fields;

use uzone\Models\BaseModels\BaseModel;

class BaseField extends BaseModel
{
  /**
   * @var string
   */
  protected $_name;

  /**
   * @var string
   */
  protected $_title;

  /**
   * @var string
   */
  protected $_placeholder;

  /**
   * @var string
   */
  protected $_type;

  /**
   * @var mixed
   */
  protected $_value;

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->_name;
  }

  /**
   * @param string $name
   * @return this
   */
  public function setName(?string $name): self
  {
    $this->_name = $name;
    return $this;
  }

  /**
   * @return string
   */
  public function getTitle(): string
  {
    return $this->_title;
  }

  /**
   * @param string $title
   * @return this
   */
  public function setTitle(?string $title): self
  {
    $this->_title = $title;
    return $this;
  }

  /**
   * @return string
   */
  public function getPlaceholder(): string
  {
    return $this->_placeholder;
  }

  /**
   * @param string $placeholder
   * @return this
   */
  public function setPlaceholder(?string $placeholder): self
  {
    $this->_placeholder = $placeholder;
    return $this;
  }

  /**
   * @return string
   */
  public function getType()
  {
    return $this->_type;
  }

  /**
   * @param string $type
   * @return this
   */
  public function setType(?string $type): self
  {
    $this->_type = $type;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getValue()
  {
    return $this->_value;
  }

  /**
   * @param mixed $value
   * @return this
   */
  public function setValue($value)
  {
    $this->_value = $value;
    return $this;
  }

  public function __construct()
  {
    $this->_type = '';
    $this->_placeholder = '';
    $this->_title = '';
    $this->_name = '';
    $this->_value = '';
  }

}