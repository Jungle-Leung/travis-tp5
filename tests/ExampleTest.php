<?php
namespace tests;

class ExampleTest extends TestCase
{
    
    public function testIndexExample()
    {
        $this->visit('/')->see('ThinkPHP');
    }
    
    /**
     * 测试read请求是否获取正确数据
     * @author Jungle 2019年4月16日 下午4:52:41
     */
    public function testReadExample()
    {
        $this->visit('/index/index/read')->seeStatusCode(200)->seeJson([
            'code' => 0
        ]);
    }
    
    /**
     * 测试create请求是否获取正确数据
     * @author Jungle 2019年4月16日 下午4:52:41
     */
    public function testCreateExample()
    {
        $this->visit('/index/index/create')->see('create');
    }
    
}