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
   * @param string $name
   * @param string $title
   * @param string $placeholder
   */
  public function text(?string $name, ?string $title, ?string $placeholder = '')
  {
    $textField = new TextField($name, $title, $placeholder);
    array_push($this->_fields, $textField);
  }

  /**
   * @param string $name
   * @param string $title
   * @param string $placeholder
   */
  public function textarea(?string $name, ?string $title, ?string $placeholder = '')
  {
    $textareaField = new TextareaField($name, $title, $placeholder);
    array_push($this->_fields, $textareaField);
  }

  /**
   * @param string $name
   * @param string $title
   */
  public function checkbox(?string $name, ?string $title)
  {
    $checkboxField = new TextField($name, $title);
    array_push($this->_fields, $checkboxField);
  }

  /**
   * @param string $name
   * @param string $title
   * @param string $placeholder
   * @param array $options
   */
  public function select(?string $name, ?string $title, $placeholder = '', $options = [])
  {
    $selectField = new SelectField($name, $title, $placeholder);
    $options = (new OptionsCollection())->fromArray($options);
    $selectField->setItems($options);

    array_push($this->_fields, $selectField);
  }

  /**
   * @param string $name
   * @param string $title
   * @param string $placeholder
   * @param array $items
   */
  public function radio(?string $name, ?string $title, $items = [])
  {
    $radioField = new RadioField($name, $title);
    $items = (new RadioItemsCollection())->fromArray($items);
    $radioField->setItems($items);

    array_push($this->_fields, $radioField);
  }

  public function submit(?string $name, ?string $title)
  {
    $buttonField = new ButtonField($name, $title);
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