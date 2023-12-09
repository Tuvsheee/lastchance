<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // ...

    public function deleteAdmin($adminId)
    {
        $admin = $this->find($adminId);

        if ($admin) {
            $admin->delete();
            return true; // or you can return a success message
        }

        return false; // or you can return an error message
    }

    // ...
}
