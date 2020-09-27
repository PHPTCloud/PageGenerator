<?php
/**
 * @class Form
 * @package uzone\Components
 * 
 * @TODO
 * - make Fields Groups functional, for grouping fields in rows
 */

namespace uzone\Components;

use uzone\Models\Fields\ButtonField;
use uzone\Models\Fields\CheckboxField;
use uzone\Models\Fields\RadioField;
use uzone\Models\Fields\RadioField\Collections\RadioItemsCollection;
use uzone\Models\Fields\SelectField;
use uzone\Models\Fields\SelectField\Collections\OptionsCollection;
use uzone\Models\Fields\TextareaField;
use uzone\Models\Fields\TextField;

class Form
{
  /**
   * @var string
   */
  protected $_name;

  /**
   * @var string
   */
  protected $_action;

  /**
   * @var string
   */
  protected $_method;

  /**
   * @var array
   */
  protected $_fields;

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->_name;
  }

  /**
   * @param string $name
   * @return Form
   */
  public function setName(?string $name): Form
  {
    $this->_name = $name;
    return $this;
  }

  /**
   * @return string
   */
  public function getAction()
  {
    return $this->_action;
  }

  /**
   * @param string $action
   * @return Form
   */
  public function setAction(?string $action): Form
  {
    $this->_action = $action;
    return $this;
  }

  /**
   * @return string
   */
  public function getMethod()
  {
    return $this->_method;
  }

  /**
   * @param string $method
   * @return Form
   */
  public function setMethod(?string $method): Form
  {
    $this->_method = $method;
    return $this;
  }

  /**
   * @param string $name
   * @param string $action
   * @param string $method
   * @param array $fields
   */
  public function __construct(?string $name, ?string $action, ?string $method, ?array $fields = [])
  {
    $this->_name = $name;
    $this->_action = $action;
    $this->_method = $method;
    $this->_fields = $fields;
  }

  /**
   * @param array $attributes
   */
  public function text(?array $attributes = [])
  {
    $textField = new TextField();
    $textField->fromArray($attributes);

    array_push($this->_fields, $textField);
  }

  /**
   * @param array $attributes
   */
  public function textarea(?array $attributes = [])
  {
    $textareaField = new TextareaField();
    $textareaField->fromArray($attributes);

    array_push($this->_fields, $textareaField);
  }

  /**
   * @param array $attributes
   */
  public function checkbox(?array $attributes = [])
  {
    $checkboxField = new CheckboxField();
    $checkboxField->fromArray($attributes);

    array_push($this->_fields, $checkboxField);
  }

  /**
   * @param array $attributes
   * @param array $options
   */
  public function select(?array $attributes = [], $options = [])
  {
    $selectField = new SelectField();
    $selectField->fromArray($attributes);

    $options = (new OptionsCollection())->fromArray($options);
    $selectField->setItems($options);

    array_push($this->_fields, $selectField);
  }

  /**
   * @param array $attributes
   * @param array $items
   */
  public function radio(?array $attributes = [], $items = [])
  {
    $radioField = new RadioField();
    $radioField->fromArray($attributes);

    $items = (new RadioItemsCollection())->fromArray($items);
    $radioField->setItems($items);

    array_push($this->_fields, $radioField);
  }

  public function submit(?array $attributes = [])
  {
    $buttonField = new ButtonField();
    $buttonField->fromArray($attributes);

    array_push($this->_fields, $buttonField);
  }

  /**
   * @return array
   */
  public function fields(): array
  {
    return $this->_fields;
  }
}