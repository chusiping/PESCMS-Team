<?php
/**
 * 版权所有 2022 PESCMS (https://www.pescms.com)
 * 完整版权和软件许可协议请阅读源码根目录下的LICENSE文件。
 *
 * For the full copyright and license information, please view
 * the file LICENSE that was distributed with this source code.
 */

namespace App\Team\GET;

class Menu extends Content{

    public function index($display = true){
        $this->assign('title', $this->model['model_title']);
        $this->assign('field', $this->field);
        $this->layout();
    }

    public function action($display = true){
        $this->assign('topMenu', json_encode(\Model\Menu::topMenu()));
        parent::action();
    }

}