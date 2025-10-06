<?php   
namespace App\Infrastructure\Adapters\Database\Eloquent\UnitOfWork;
use App\Application\Users\Port\Out\UnitOfWorkPort;
use Illuminate\Support\Facades\DB;  

class EloquentUnitOfWorkAdapter implements UnitOfWorkPort
{
    public function begin(): void
    {
        DB::beginTransaction();
    }

    public function commit(): void
    {
        DB::commit();
    }

    public function rollback(): void
    {
        DB::rollBack();
    }
}