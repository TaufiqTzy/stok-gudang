<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        $this->seed(StoresCRUDDataTypeAdded::class);
        $this->seed(StoresCRUDDataRowAdded::class);
        $this->seed(TypesCRUDDataTypeAdded::class);
        $this->seed(TypesCRUDDataRowAdded::class);
        $this->seed(StocksCRUDDataTypeAdded::class);
        $this->seed(StocksCRUDDataRowAdded::class);
        
        
        $this->seed(TakesCRUDDataTypeAdded::class);
        $this->seed(TakesCRUDDataRowAdded::class);
        $this->seed(BranchesCRUDDataDeleted::class);
        
        
        $this->seed(BranchesCRUDDataTypeAdded::class);
        $this->seed(BranchesCRUDDataRowAdded::class);
    }
}
