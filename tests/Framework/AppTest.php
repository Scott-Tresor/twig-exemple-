<?php 

namespace Test\Framework;

use Framework\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase{

    public function testRedirect()
    {
        $app =  new App();
        $_SERVER['REQUEST_URI'] = 'azezezeze';
        $app->run();
        $this->assertContains('Location: /azazaza', headers_list());
    }
}