# PageGenerator 0.0.1
The collection of classes for generate html pages from laravel controllers or views.

### Installation
```
composer require phptcloud/pagegenerator
```

### Folders
 - Collections - basic collections and collections of models
 - Models - basic models and models for components
 - Components - classes which will be using for generation
 - Factories - factories for models, collectin, etc.
 - Helpers - interfaces for constants and methods
 - Exceptions - exceptions of this package
 - PageGenerator.php - client
  
#### Examples 
```php
use PageGenerator\Collections\IconsCollection;
use PageGenerator\Models\Icon;

$homeIcon = new Icon('fas', 'fa-home');
$icons = new IconsCollection();
$icons->add($homeIcon);

var_dump($icons);

// or
$icons = [
  [
    'packName' => 'fas',
    'iconName' => 'fa-home',
  ],
];

$icons = (new IconsCollection())->fromArray($icons);
var_dump($icons);
```