<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Costumer;
use App\Models\Device;

class CustomerTest extends TestCase
{
	use RefreshDatabase;
    public function test_customer_can_have_multiple_devices()
    {
        
        $customer = Costumer::create([
            'name' => 'Alberto Juárez',
        ]);

        
        $device1 = Device::create([
            'name' => 'Iphone',
            'customer_id' => $customer->id,
        ]);

        $device2 = Device::create([
            'name' => 'Ipad',
            'customer_id' => $customer->id,
        ]);

        
        $customerWithDevices = Costumer::with('devices')->find($customer->id);

        
        $this->assertCount(2, $customerWithDevices->devices);
        $this->assertEquals('Iphone', $customerWithDevices->devices[0]->name);
        $this->assertEquals('Ipad', $customerWithDevices->devices[1]->name);
    }

    /**
     * Test que un cliente puede no tener dispositivos.
     *
     * @return void
     */
    public function test_customer_can_have_no_devices()
    {
        
        $customer = Costumer::create([
            'name' => 'Juan Álvarez',
        ]);

        
        $customerWithoutDevices = Costumer::with('devices')->find($customer->id);

        
        $this->assertCount(0, $customerWithoutDevices->devices);
    }
	
	/**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
