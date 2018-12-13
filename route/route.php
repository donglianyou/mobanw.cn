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

/*Route::get('CLTPHP', function () {
    return 'hello,CLTPHP!';
});*/
return [
    '/'=>'home/index/index',
    'sitecode-:catId'=>'home/sitecode/index',
    'templates-:catId'=>'home/templates/index',
    'course-:catId'=>'home/course/index',
    'effect-:catId'=>'home/effect/index',
    'resource-:catId'=>'home/resource/index',
    'webmaster-:catId'=>'home/webmaster/index',
    'plan-:catId'=>'home/plan/index',
    'erkai-:catId'=>'home/erkai/index',
    'video-:catId'=>'home/video/index',
    'forum-:catId'=>'home/forum/index',
    'course-:catId-[:id]'=>'home/course/info',
    'database-:catId-[:id]'=>'home/database/info',
    'server-:catId-[:id]'=>'home/server/info',
    'php-:catId-[:id]'=>'home/php/info',
    'cms-:catId-[:id]'=>'home/cms/info',
    'seo-:catId-[:id]'=>'home/seo/info',
    'front-:catId-[:id]'=>'home/front/info',
    'toolsPlus-:catId-[:id]'=>'home/toolsPlus/info',
    'effect-:catId-[:id]'=>'home/effect/info',
    'resource-:catId-[:id]'=>'home/resource/info',
    'webmaster-:catId-[:id]'=>'home/webmaster/info',
    'video-:catId-[:id]'=>'home/video/info',
    'forum-:catId-[:id]'=>'home/forum/info',
    'senmsg'=>'home/index/senmsg',
    'down-:id'=>'home/index/down',
];
