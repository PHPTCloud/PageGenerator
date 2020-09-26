<?php
/**
 * @class Pagination
 * @package uzone\Components
 */

namespace uzone\Components;

use uzone\Collections\PaginationItems;
use uzone\Models\PaginationItem;

class Pagination
{
  /**
   * @var PaginationItems
   */
  protected $_items;

  /**
   * @var int
   */
  protected $_perPage;

  /**
   * @var int
   */
  protected $_currentPage;

  /**
   * @var int
   */
  protected $_total;

  /**
   * @var int
   */
  protected $_lastPage;

  /**
   * @var string
   */
  protected $_path;

  /**
   * @var string
   */
  protected $_pageName;

  /**
   * @param Illuminate\Pagination\LengthAwarePaginator $pagination
   */
  public function __construct($pagination)
  {
    $this->_lastPage = $pagination->lastPage();
    $this->_total = $pagination->total();
    $this->_perPage = $pagination->perPage();
    $this->_currentPage = $pagination->currentPage();
    $this->_path = $pagination->path();
    $this->_pageName = (isset($pagination->pageName)) ? $pagination->pageName : 'page';
  }

  /**
   * @return Pagination
   */
  public function paginate()
  {
    $items = new PaginationItems();
    
    for($i = 1; $i <= $this->_lastPage; $i++) {
      $items->add(
        (new PaginationItem())->fromArray([
          'pageNumber' => $i,
          'title' => (string) $i,
          'url' => $this->_path . '/?' . $this->_pageName . '=' . (string) $i,
          'isActive' => ($this->_currentPage == $i) ? true : false,
        ])
      );
    }

    $this->_items = $items;
    return $this;
  }
}