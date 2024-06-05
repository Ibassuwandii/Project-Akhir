<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// app/Models/Privilege.php

class Privilege extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_privileges', 'privilege_id', 'user_id');
    }
}
