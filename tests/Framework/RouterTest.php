<?php 

namespace Test\Framework;

use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase {

    public function setUp(): void
    {
        $this->router = new Router();
    }

    public function testGetMethod():  void
    {
        $request = new Request('GET', '/blog');
        $this->router->get('/blog', function (){}, 'blog');
        $this->router->match($request);
    }
}