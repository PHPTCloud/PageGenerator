<?php
/**
 * @class FromToFilter
 * @package PageGenerator\Filters
 */

namespace PageGenerator\Filters;

use PageGenerator\Filters\BaseFilters\BaseFilter;

class FromToFilter extends BaseFilter
{
  /**
   * @param array $conditions
   * @return array
   */
  public function make(?array $conditions)
  {
    $filter = [];

    foreach($conditions as $column => $value) {
      /**
       * Check 'from', 'to' construction
       */
      if(is_array($value)) {
        if(isset($value['from']) && !empty($value['from'])) {
          $filter[] = self::from($column, $value['from']);
        }

        if(isset($value['to']) && !empty($value['to'])) {
          $filter[] = self::to($column, $value['to']);
        }

        continue;
      }

      if(!empty($value)) {
        $filter[] = [$column, $this->_equalSign, $this->valueAsLike($value)];
      }
    }

    return $filter;
  }

  /**
   * @param string $columnName
   * @param string $from
   * @return array
   */
  public static function from(?string $columnName, ?string $from): array
  {
    return [$columnName, '>=', $from];
  }

  /**
   * @param string $columnName
   * @param string $to
   * @return array
   */
  public static function to(?string $columnName, ?string $to): array
  {
    return [$columnName, '<=', $to];
  }
}