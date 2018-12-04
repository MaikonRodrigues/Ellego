<?php


use Illuminate\Database\Seeder;
use Ellego\Role;
use Ellego\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_student = Role::where('name', 'student')->first();
        $role_teacher  = Role::where('name', 'teacher')->first();

        
        $employee = new User();
        $employee->name = 'Andrey';
        $employee->email = 'andreygfranca@gmail.com';
        $employee->password = bcrypt('1234');
        $employee->save();
        $employee->roles()->attach($role_student);
        $employee->roles()->attach($role_teacher);


        $teacher = new User();
        $teacher->name = 'Teacher';
        $teacher->email = 'teacher@gmail.com';
        $teacher->password = bcrypt('1234');
        $teacher->save();
        $teacher->roles()->attach($role_teacher);

        $teacher = new User();
        $teacher->name = 'maikon';
        $teacher->email = 'maikon@gmail.com';
        $teacher->password = bcrypt('1234');
        $teacher->save();
        $teacher->roles()->attach($role_teacher);
    }
}
