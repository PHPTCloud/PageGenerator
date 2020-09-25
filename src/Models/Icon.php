<?php

namespace uzone\Models;

use uzone\Models\BaseModels\BaseModel;
use uzone\Helpers\IconHelper;
use uzone\Exceptions\NotInitializedException;

class Icon extends BaseModel
{
  /**
   * @var string
   */
  protected $_packName;

  /**
   * @var string
   */
  protected $_iconName;

  /**
   * @return string
   */
  public function getPackName()
  {
    return $this->_packName;
  }

  /**
   * @param string $packName
   * @return this
   */
  public function setPackName(?string $packName)
  {
    $this->_packName = $packName;
    return $this;
  }

  /**
   * @return string
   */
  public function getIconName()
  {
    return $this->_iconName;
  }

  /**
   * @param string $iconName
   * @return this
   */
  public function setIconName(?string $iconName)
  {
    $this->_iconName = $iconName;
    return $this;
  }

  public function __construct(?string $packName = '', ?string $iconName = '')
  {
    $this->setPackName($packName);
    $this->setIconName($iconName);
  }

  /**
   * @return string
   */
  public function icon()
  {
    if(
      !empty($this->getPackName()) &&
      !empty($this->getIconName())
    ) {
      return IconHelper::make($this);
    } else {
      throw new NotInitializedException('Icon was\'nt initialized correct for build this one.');
    }
  }
}