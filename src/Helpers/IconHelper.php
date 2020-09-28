<?php

namespace PageGenerator\Helpers;

use PageGenerator\Models\Icon;


class IconHelper
{
  /**
   * @param Icon $icon
   * @return this
   */
  public static function make(?Icon $icon)
  {
    return '<i class="'.$icon->getPackName().' '.$icon->getIconName().'"></i>';
  }
}