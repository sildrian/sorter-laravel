<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testBasicTest()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function testShowData()
    {
        $response = $this->get('/gettxt/unsorted-names-list');

        $response->assertStatus(200);
    }

    public function testDoSort()
    {
        $response = $this->get('/dosort/unsorted-names-list');

        $response->assertStatus(200);
    }
}
