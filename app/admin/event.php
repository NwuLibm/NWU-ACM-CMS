<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 事件定义文件
return [
    'bind'    =>    [
        // 更多事件绑定
    ],
    'listen'  =>    [
        'AdminLogin'    =>    ['app\admin\listener\AdminLogin'],
        // 更多事件监听
    ],
];