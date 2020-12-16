<?php

namespace Encore\PHPInfo\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;
use Encore\PHPInfo\PHPInfo;

class PHPInfoController extends Controller
{
    public function index(Content $content, PHPInfo $info)
    {
    	$path = PHPInfo::config('path', 'phpinfo');

    	$info = $info->toCollection();

        return $content
            ->title('PHP\'s configuration')
            ->description('哥们第一个composer扩展')
            ->body(view('laravel-admin-phpinfo::phpinfo', compact('info')));
    }
}