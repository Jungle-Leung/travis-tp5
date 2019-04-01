<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------
namespace tests;

class ExampleTest extends TestCase
{
    
    public function testBasicExample()
    {
        $this->visit('/')->see('ThinkPHP');
    }
    
    public function readTest()
    {
        $this->visit('/index/index/read')->see('read');
    }
    
    public function createTest()
    {
        $this->visit('/index/index/create')->see('create');
    }
    
}