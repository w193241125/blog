<?php
/**
 * Created by liuguansheng.
 * Email: w193241125@163.com
 * Time: 2017/12/5 14:37
 */

/**
 *  将当前请求的路由名称转换为 CSS 类名称，作用是允许我们针对某个页面做页面样式定制
*/
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}