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
        $this->assertIsObject($PDO); // This tests for a database connection. This will return a PDO object if there is a connection and an error if not.
        $this->assertEquals($DB_name, 'golden_shoe'); 
    }
}
