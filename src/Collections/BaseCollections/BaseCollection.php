<?php

namespace uzone\Collections\BaseCollections;

use uzone\Models\BaseModels\BaseModel;
use uzone\Factories\ModelsFactory;


class BaseCollection
{
  /**
   * @var array
   */
  protected $_items;

  /**
   * @var string
   */
  protected $_MODEL = BaseModel::class;

  public function __construct(?array $items = [])
  {
    $this->_items = $items;
    return $this;
  }

  /**
   * @return BaseModel
   */
  public function first()
  {
    return (isset($this->_items[0]))
      ? $this->_items[0]
      : $this->_items;
  }

  /**
   * @return BaseModel
   */
  public function last()
  {
    return (isset($this->_items[count($this->_items) - 1]))
      ? $this->_items[count($this->_items) - 1]
      : $this->_items;
  }

  /**
   * @param BaseModel
   * @return this
   */
  public function add($model)
  {
    array_push($this->_items, $model);
    return $this;
  }

  /**
   * @param BaseModel
   * @return boolean
   */
  public function removeModel($model)
  {
    foreach($this->_items as $index => $item)
    {
      if($item === $model)
      {
        unset($this->_items[$index]);
      }
    }

    return $this;
  }

  /**
   * @param integer
   * @return this
   */
  public function remove($index)
  {
    if(isset($this->_items[$index]))
    {
      unset($this->_items[$index]);
    }

    return $this;
  }

  /**
   * @param string $key
   * @param mixed $value
   * @return BaseModel|boolean
   */
  public function findBy(?string $key, $value)
  {
    foreach($this->_items as $item)
    {
      $method = 'get' . ucfirst($key);

      if(method_exists($item, $method))
      {
        if($item->$method() == $value)
        {
          return $item;
        }
      }
    }

    return false;
  }

  /**
   * @return array
   */
  public function items(): array
  {
    return $this->_items;
  }

  public function fromArray(?array $array)
  {
    foreach($array as $model)
    {
      $this->add(
        (new $this->_MODEL())->fromArray($model)
      );
    }

    return $this;
  }
}