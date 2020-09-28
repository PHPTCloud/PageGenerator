<?php

namespace PageGenerator\Models;

use PageGenerator\Models\BaseModels\BaseModel;
use PageGenerator\Models\Icon;
use PageGenerator\Collections\NavigationItems;


class NavigationItem extends BaseModel
{
  /**
   * @var string
   */
  protected $_link;

  /**
   * @var string
   */
  protected $_title;

  /**
   * @var string
   */
  protected $_icon;

  /**
   * @var NavigationItems
   */
  protected $_childs;

  /**
   * @return string
   */
  public function getLink()
  {
    return $this->_link;
  }

  /**
   * @param string $link
   * @return this
   */
  public function setLink(?string $link)
  {
    $this->_link = $link;
    return $this;
  }

  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->_title;
  }

  /**
   * @param string $title
   * @return this
   */
  public function setTitle(?string $title)
  {
    $this->_title = $title;
    return $this;
  }

  /**
   * @return Icon
   */
  public function getIcon()
  {
    return $this->_icon;
  }

  /**
   * @param Icon $icon
   * @return this
   */
  public function setIcon(?Icon $icon)
  {
    $this->_icon = $icon;
    return $this;
  }

  /**
   * @return NavigationItems
   */
  public function getChilds()
  {
    return $this->_childs;
  }

  /**
   * @param NavigationItems $childs
   * @return this
   */
  public function setChilds(?NavigationItems $childs)
  {
    $this->_childs = $childs;
    return $this;
  }
}