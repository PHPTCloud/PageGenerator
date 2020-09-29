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
   * @param array $conditions
   */
  public function __construct(?array $conditions = [])
  {
    $this->_conditions = $conditions;
  }
}