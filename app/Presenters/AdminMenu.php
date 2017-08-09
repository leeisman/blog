<?php

namespace App\Presenters;

class AdminMenu
{
    public function makeMenu()
    {
        $menuConfig = config('admin.menu');

        $template = '<ul class="sidebar-menu">';

        foreach ($menuConfig as $name => $value) {

            if (is_array($value)) {

                $template .= ' <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>' . $name . '</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        @li
                    </ul>
                </li>';

                $li = '';
                foreach ($value as $name => $value) {
                    $li .= '<li class="active"><a href="' . $value . '">
                                   <i class="fa fa-circle-o"></i>' . $name . '</a></li>';
                }

                $template = str_replace('@li', $li, $template);
                continue;
            }

            $template .= '<li class="active"><a href="' . $value . '">
                                   <i class="fa fa-circle-o"></i>' . $name . '</a></li>';

        }

        $template .= '</ul>';

//        dd($template);
        return $template;
    }
}