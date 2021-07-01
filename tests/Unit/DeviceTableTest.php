<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class DeviceTableTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $deviceCount = DB::table('devices')->whereNotNull('created_at')->count();
        $this->assertEquals(3, $deviceCount);
    }
}
