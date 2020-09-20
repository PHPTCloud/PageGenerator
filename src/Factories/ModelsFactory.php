<?php

namespace uzone\Factories;

use uzone\Exceptions\NotFoundModelException;
use uzone\Models\BaseModels\BaseModel;
use uzone\Models\NavigationItem;
use uzone\Models\Icon;


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