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
   * @param string $columnName
   * @param string $from
   * @param string $to
   * @return array
   */
  public static function make(?string $columnName, ?string $from, ?string $to): array
  {
    return [
      [$columnName, '<=', $from],
      [$columnName, '>=', $to],
    ];
  }
}