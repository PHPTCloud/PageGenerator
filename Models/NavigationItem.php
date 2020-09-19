<?php

namespace uzone\Models;

use uzone\Models\BaseModels\BaseModel;


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
}