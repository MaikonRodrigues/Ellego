<?php

use Illuminate\Database\Seeder;
use Ellego\Role;
use Ellego\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_employee = new Role();
	    $role_employee->name = 'student';
	    $role_employee->description = 'Um aluno da Universidade';
	    $role_employee->save();

	    $role_manager = new Role();
	    $role_manager->name = 'teacher';
	    $role_manager->description = 'Pesquisador da Universidade';
	    $role_manager->save();
    }
}
