<?php
namespace App\Infrastructure\Adapters\Database\Eloquent\Repository; 
use App\Application\Users\Port\Out\UserRepositoryPort;
use App\Application\Users\Port\Out\UnitOfWorkPort;
use App\Domain\Application\Users\Entity\User;   
use App\Infrastructure\Adapters\Database\Eloquent\Model\UserModel;
use Illuminate\Support\Facades\DB;
use Exception;

class EloquentUserRepositoryAdapter implements UserRepositoryPort, UnitOfWorkPort
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

    public function save(User $user): void
    {
        try {
            $userModel = UserModel::updateOrCreate(
                ['id' => $user->getId()],
                [
                    'email' => $user->getEmail(),
                    'name' => $user->getName(),
                    'password' => password_hash($user->getPassword(), PASSWORD_BCRYPT),
                ]
            );
            $user->setId($userModel->id);
        } catch (Exception $e) {
            throw new Exception("Error saving user: " . $e->getMessage());
        }
    }

    public function findByEmail(string $email): ?User
    {
        $userModel = UserModel::where('email', $email)->first();

        if (!$userModel) {
            return null;
        }

        return new User(
            $userModel->id,
            $userModel->email,
            $userModel->name,
            $userModel->password
        );
    }
}
