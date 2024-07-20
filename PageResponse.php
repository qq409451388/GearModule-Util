<?php
class PageResponse extends EzObject {
    /*
     * @var array<mixed>
     */
    public $list;

    /**
     * @var PageInfo
     */
    public $pageInfo;

    public static function init($list, $page, $pageSize, $total)
    {
        $obj = new PageResponse();
        $obj->list = $list;
        $obj->pageInfo = PageInfo::init($page, $pageSize, $total);
        return $obj;
    }
}
