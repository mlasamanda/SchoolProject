<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'fname' => 'admin', 
            'lname' => 'admin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'salary'=>'admin',
            'dob'=>'admin',
            'gender'=>'admin',
            'nation'=>'admin',
            'roles'=>'admin',
            'mobile'=>'admin',
            'roles'=>'admin'
        ]);
    
        
     
       
    }
}