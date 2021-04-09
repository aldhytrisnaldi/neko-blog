<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    public function model(array $row)
    {
        return new User([
            'username'  => $row['username'],
            'email'     => $row['email'],
            'password'  => Hash::make($row['password']),
        ]);
    }
}
