<?php
namespace App\Components;

use App\Models\Menu;

class MenuRecusive
{
    private $html;
    public function __construct()
    {
        $this->html = '';
    }

    public function menuRecusiveAdd($parentId = 0, $subMark = '')
    {
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $dataItem) {
            $this->html .= '<opison value="' . $dataItem->id.'">' . $subMark . $dataItem->name . '</opison>';
            $this->menuRecusiveAdd($dataItem->id, $subMark . '--');
        }
        return $this->html;
    }
}
