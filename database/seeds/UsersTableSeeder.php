<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $json = File::get("database/data/users.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
           User::create(array(
                'id' => $obj->_id,
                'name' => $obj->name->first.' '.$obj->name->last,
                'eye_color' => $obj->eyeColor,
                'age' => $obj->age,
                'is_active' => $obj->isActive
            ));
        }
    }
}
