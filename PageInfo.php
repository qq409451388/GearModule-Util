<?php
class PageInfo extends EzObject
{
    public $page;
    public $pageSize;
    public $total;
    public $totalPage;

    /**
     * @param $page
     * @param $pageSize
     * @param $total
     * @return PageInfo
     */
    public static function init($page = 1, $pageSize = 10, $total = 0)
    {
        $pageInfo = new PageInfo();
        $pageInfo->page = $page;
        $pageInfo->pageSize = $pageSize;
        $pageInfo->total = $total;
        $pageInfo->totalPage = ceil($total / $pageSize);
        return $pageInfo;
    }
}
