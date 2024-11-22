<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Costumer;

class ListUsersWithDevices extends Command
{
    protected $signature = 'users:list';

    protected $description = 'Lista todos los usuarios con sus dispositivos';

    public function handle()
    {

        $customers = Costumer::with('devices')->get();


        foreach ($customers as $customer) {
            $this->line('Nombre: ' . $customer->brand);

            // Si el cliente tiene dispositivos
            if ($customer->devices->isNotEmpty()) {
                $this->line('  Dispositivos:');
                foreach ($customer->devices as $device) {
                    $this->line('    - ' . $device->brand);
                }
            } else {
                $this->line('  No tiene dispositivos.');
            }
            $this->line(''); // Espacio en blanco entre usuarios
        }
    }
}
