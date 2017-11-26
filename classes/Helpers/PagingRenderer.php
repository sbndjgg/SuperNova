<?php
/**
 * Created by Gorlum 25.11.2017 21:45
 */

namespace Helpers;

use DBAL\DbSqlPaging;

class PagingRenderer {
  const KEYWORD = 'sheet';

  /**
   * @var string $rootUrl
   */
  protected $rootUrl = '';

  /**
   * @var DbSqlPaging $pager
   */
  protected $pager;

  protected $result = [];

  protected $current;
  protected $total;

  protected $from;
  protected $to;

  public function __construct(DbSqlPaging $pager, $rootUrl = '') {
    $this->pager = $pager;
    $this->rootUrl = URLHelper::addParam($rootUrl, self::KEYWORD . '=');
  }

  protected function href($pageNum, $link, $style = '', $href = true, $active = true) {
    return
      [
        'HREF'     => $active ? $href : false,
        'STYLE'    => $active ? $style : 'inactive',
        'PAGE_NUM' => $pageNum,
        'TEXT'     => $link,
      ];
  }

  protected function addNumbers() {
    $this->from = max(
      1,
      $this->current - PAGING_SIZE_MAX_DELTA - max(0, $this->current + PAGING_SIZE_MAX_DELTA - $this->total)
    );
    $this->to = min(
      $this->total,
      $this->current + PAGING_SIZE_MAX_DELTA - min(0, $this->current - PAGING_SIZE_MAX_DELTA - 1)
    );

    for ($i = $this->from; $i <= $this->to; $i++) {
      array_push($this->result, $this->href($i, $i, $i == $this->current ? 'current' : 'before-after', $i != $this->current));
    }
  }

  protected function addEllipsis() {
    if ($this->from > 1) {
      array_unshift($this->result, $this->href(0, '...', 'ellipsis', false));
    }
    if ($this->to < $this->total) {
      array_push($this->result, $this->href(0, '...', 'ellipsis', false));
    }
  }

  protected function addPrevNext() {
    $prevActive = $this->current > 1;
    array_unshift($this->result, $this->href($this->current - 1, '&lt;&lt;', 'prev-next', $prevActive, $prevActive));

    $nextActive = $this->current < $this->total;
    array_push($this->result, $this->href($this->current + 1, '&gt;&gt;', 'prev-next', $nextActive, $nextActive));
  }

  protected function addFirstLast() {
    $firstActive = $this->current != 1;
    array_unshift($this->result, $this->href(1, '&#124;&lt;-', 'first-last', $firstActive, $firstActive));

    $lastActive = $this->current != $this->total;
    array_push($this->result, $this->href($this->total, '-&gt;&#124;', 'first-last', $lastActive, $lastActive));
  }

  /**
   * @return string
   */
  public function render() {
    $output = '';

    $this->result = [];

    $this->current = $this->pager->getCurrentPageNumber();
    $this->total = $this->pager->getTotalPages();

    if ($this->total > 1) {
      $this->addNumbers();
      $this->addEllipsis();
      $this->addPrevNext();
      $this->addFirstLast();
    }

    if(!empty($this->result)) {
      $template = gettemplate('_paging');
      $template->assign_recursive([
        'PAGING_ROOT' => $this->rootUrl,
        '.'           => ['paging' => $this->result]
      ]);
      $output = $template->assign_display('_paging');
    }

    return $output;
  }

}
