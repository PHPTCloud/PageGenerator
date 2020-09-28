<?php

namespace PageGenerator\Factories;

use PageGenerator\Exceptions\NotFoundModelException;
use PageGenerator\Models\Fields\BaseField;
use PageGenerator\Models\Fields\ButtonField;
use PageGenerator\Models\Fields\CheckboxField;
use PageGenerator\Models\Fields\DateField;
use PageGenerator\Models\Fields\DateTimeField;
use PageGenerator\Models\Fields\RadioField;
use PageGenerator\Models\Fields\SelectField;
use PageGenerator\Models\Fields\TextareaField;
use PageGenerator\Models\Fields\TextField;

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