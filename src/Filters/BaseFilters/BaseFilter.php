<?php
/**
 * @class BaseFilter
 * @package PageGenerator\Filters\BaseFilters
 * 
 * @link https://laravel.com/docs/8.x/queries#where-clauses
 */

namespace PageGenerator\Filters\BaseFilters;

class BaseFilter
{
  /**
   * @var array
   */
  protected $_conditions;

  /**
   * @var array
   */
  protected $_filter;

  /**
   * @var bool
   */
  protected $_equalSign;

  /**
   * @return array
   */
  public function getFilter(): array
  {
    return $this->_filter;
  }

  /**
   * @param array $conditions
   */
  public function __construct(?array $conditions = [], ?bool $useLike = false)
  {
    $this->_conditions = $conditions;
    $this->useLike($useLike);
    $this->_filter = $this->make($conditions);
  }

  /**
   * @param array $conditions
   * @return array
   */
  public function make(?array $conditions)
  {
    $filter = [];

    foreach($conditions as $column => $value) {
      if(!empty($value)) {
        $filter[] = [$column, $this->_equalSign, $value];
      }
    }

    return $filter;
  }

  /**
   * @param bool $useLike
   * @return this
   */
  public function useLike(?bool $useLike): self
  {
    $this->_equalSign = ($useLike) ? 'like' : '=';
    return $this;
  }
}