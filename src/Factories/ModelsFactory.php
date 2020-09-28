<?php

namespace PageGenerator\Factories;

use PageGenerator\Exceptions\NotFoundModelException;
use PageGenerator\Models\BaseModels\BaseModel;
use PageGenerator\Models\NavigationItem;
use PageGenerator\Models\Icon;


class ModelsFactory
{
  /**
   * @param string $modelName
   */
  public static function make(?string $modelName)
  {
    switch($modelName)
    {
      case 'BaseModel':
        return new BaseModel();
        break;

      case 'NavigationItem':
        return new NavigationItem();
        break;

      case 'Icon':
        return new Icon();
        break;
        
      default:
        throw new NotFoundModelException('Model '.$modelName.' not found.');
        break;
    }
  }
}