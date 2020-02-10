 <?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*crea un administrador*/
        $role = new Role();
        $role->name = "admin";
        $role->description = "Administrador";
        $role->save();
        /*crea un usuario normal*/
        $role = new Role();
        $role->name = "user";
        $role->description = "User";
        $role->save();
    }
}
