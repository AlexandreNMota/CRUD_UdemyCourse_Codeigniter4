<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    /*
        Essa classe faz o seed de um usuário Admin na tabela user da Database taskapp
    */
    public function run()
    {
        $model = new \App\Models\UserModel;      //Carrega a model
        
        $data = [                                // Dados para seed
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password'=> 'adminadmin',
            'is_admin' => true,
            'is_active'=>true,
        ];

        $model                                   
            ->skipValidation(true)               //Retira a necessidade do password validation p/ a seed
            ->protect(false)                     // Para evitar colocar o campo is_admin no allowed fields na model
            ->insert($data);                     // Insere os dados na tabela user

        
    }
}
