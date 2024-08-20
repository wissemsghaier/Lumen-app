<?php

use Laravel\Lumen\Testing\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->get('/');

        $response->seeStatusCode(200);
        $response->seeJsonEquals([
            'message' => 'Welcome to Lumen.'
        ]);
    }
}

