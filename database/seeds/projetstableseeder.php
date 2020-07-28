<?php

use Illuminate\Database\Seeder;

class projetstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\projet::class,7)->create();
        $user1 = App\User::create([
            'name'=>'marwan',
            'email'=>'marwan@gmail.com',
            'password'=>bcrypt('password'),
            'admin'=>1
        ]);
        App\Profile::create([
            'id_user'=>$uesr1->id,
            'avatar'=>'upload\avatar\admin_avatar.png',
            'Phone-number-1'=>'0665819467',
            'fb'=>'https://web.facebook.com/'
        ]);


        $user2 = App\User::create([
            'name'=>'younes',
            'email'=>'younes@gmail.com',
            'password'=>bcrypt('password'),
            'admin'=>1
        ]);
        App\Profile::create([
            'id_user'=>$uesr2->id,
            'avatar'=>'upload\avatar\admin_avatar.png',
            'Phone-number-1'=>'0665819467',
            'fb'=>'https://web.facebook.com/'
        ]);


        $user3 = App\User::create([
            'name'=>'hamid',
            'email'=>'hamid@gmail.com',
            'password'=>bcrypt('password'),
            'admin'=>1
        ]);
        App\Profile::create([
            'id_user'=>$uesr3->id,
            'avatar'=>'upload\avatar\admin_avatar.png',
            'Phone-number-1'=>'0665819467',
            'fb'=>'https://web.facebook.com/'
        ]);


        $user4 = App\User::create([
            'name'=>'yacine',
            'email'=>'yacine@gmail.com',
            'password'=>bcrypt('password'),
            'admin'=>1
        ]);
        App\Profile::create([
            'id_user'=>$uesr4->id,
            'avatar'=>'upload\avatar\admin_avatar.png',
            'Phone-number-1'=>'0665819467',
            'fb'=>'https://web.facebook.com/'
        ]);

    }
}
