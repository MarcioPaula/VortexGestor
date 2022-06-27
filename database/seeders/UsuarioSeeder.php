<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => "admin",
            'email' => "admin@email.com",
            'password' => bcrypt("123456"),
        ];
        if(User::where('email','=',$dados['email'])->count())
        {
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado";
        }else
        {
            User::create($dados);
            echo "Usuario Criado";
        }
    }
}
