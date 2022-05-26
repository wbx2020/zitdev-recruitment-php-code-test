<?php
/*
 * @Date         : 2022-03-02 14:49:25
 * @LastEditors  : Jack Zhou <jack@ks-it.co>
 * @LastEditTime : 2022-03-02 17:22:16
 * @Description  : 
 * @FilePath     : /recruitment-php-code-test/tests/App/DemoTest.php
 */

namespace Test\App;

use App\App\Demo;
use PHPUnit\Framework\TestCase;
use App\Util\HttpRequest;
use App\Service\AppLogger;


class DemoTest extends TestCase {

//    public function test_foo() {
//
//    }

    public function test_get_user_info() {
        $Demo = new Demo(new AppLogger(), new HttpRequest());
        $user_info = $Demo->get_user_info();
        $this->assertEquals(1, $user_info["id"]);
        $this->assertSame("hello world", $user_info["username"]);
    }
}