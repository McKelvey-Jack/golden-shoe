<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class DatabaseConnectionTest extends TestCase
{
    /**
     * test database connection.
     *
     * @return void
     */
    public function test_db_connection()
    {
        $PDO = DB::getPdo();
        $DB_name = DB::connection()->getDatabaseName();
        $this->assertIsObject($PDO);
        $this->assertEquals($DB_name, 'golden_shoe');
    }
}
