<?php

namespace uzone\Factories;

use uzone\Exceptions\NotFoundModelException;
use uzone\Models\Fields\BaseField;
use uzone\Models\Fields\ButtonField;
use uzone\Models\Fields\CheckboxField;
use uzone\Models\Fields\DateField;
use uzone\Models\Fields\DateTimeField;
use uzone\Models\Fields\RadioField;
use uzone\Models\Fields\SelectField;
use uzone\Models\Fields\TextareaField;
use uzone\Models\Fields\TextField;

class FieldsModelsFactory
{
  /**
   * @param string $modelName
   */
  public static function make(?string $modelName)
  {
    switch($modelName)
    {
      case 'BaseField':
        return new BaseField();
        break;

      case 'TextField':
        return new TextField();
        break;

      case 'TextareaField':
        return new TextareaField();
        break;

      case 'CheckboxField':
        return new CheckboxField();
        break;

      case 'SelectField':
        return new SelectField();
        break;

      case 'RadioField':
        return new RadioField();
        break;

      case 'DateField':
        return new DateField();
        break;

      case 'DateTimeField':
        return new DateTimeField();
        break;

      case 'ButtonField':
        return new ButtonField();
        break;
        
      default:
        throw new NotFoundModelException('Model '.$modelName.' not found.');
        break;
    }
  }
}