<?php
/**
 * @class PaginationItem
 * @package uzone\Models
 */

namespace uzone\Models;

use uzone\Models\BaseModels\BaseModel;

class PaginationItem extends BaseModel
{
  /**
   * @var int
   */
  protected $_pageNumber;

  /**
   * @var string
   */
  protected $_title;

  /**
   * @var string
   */
  protected $_url;

  /**
   * @var bool
   */
  protected $_isActive;

  /**
   * @return int
   */
  public function getPageNumber(): int
  {
    return $this->_pageNumber;
  }

  public function setPageNumber(?int $pageNumber): PaginationItem
  {
    $this->_pageNumber = $pageNumber;
    return $this;
  }

  /**
   * @return string
   */
  public function getTitle(): string
  {
    return $this->_title;
  }

  /**
   * @param string $title
   * @return PaginationItem
   */
  public function setTitle(?string $title): PaginationItem
  {
    $this->_title = $title;
    return $this;
  }

  /**
   * @return string
   */
  public function getUrl(): string
  {
    return $this->_url;
  }

  /**
   * @param string $url
   * @return PaginationItem
   */
  public function setUrl(?string $url): PaginationItem
  {
    $this->_url = $url;
    return $this;
  }

  /**
   * @return bool
   */
  public function getIsActive(): bool
  {
    return $this->_isActive;
  }

  /**
   * @param bool $isActive
   * @return PaginationItem
   */
  public function setIsActive(?bool $isActive): PaginationItem
  {
    $this->_isActive = $isActive;
    return $this;
  }
}