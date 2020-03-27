<?php

namespace App\Http\Controllers\Backend\Model;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    
    public function getChildren($data, $line)
    {
        $children = [];
        foreach ($data as $line1) {
            if ($line['id'] == $line1['parent']) {
                $children = array_merge($children, [ array_merge($line1, ['submenu' => $this->getChildren($data, $line1) ]) ]);
            }
        }
        return $children;
    }
    public function optionsMenu($client)
    {
        return $this->where('client', $client)
            ->orderby('parent')
            ->orderby('order')
            ->orderby('name')
            ->orderby('client')
            ->get()
            ->toArray();
    }

    public static function menus($client)
    {
        $menus = new Menu();
        $data = $menus->optionsMenu($client);
        $menuAll = [];
        foreach ($data as $line) {
            $item = [ array_merge($line, ['submenu' => $menus->getChildren($data, $line) ]) ];
            $menuAll = array_merge($menuAll, $item);
        }
        //return $menus->menuAll = dd($data);
        return $menus->menuAll = $menuAll;
    }

}
