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
    	/*administrador*/
        $role = new Role();
        $role->name = "admin";
        $role->description = "Administrador";
        $role->save();
        /*usuario normal*/
        $role = new Role();
        $role->name = "admin";
        $role->description = "Administrador";
        $role->save();
    }
}
