<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Hewan;
use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addUsers();
        $this->addContent();
    }

    /**
     * Add user
     */
    public function addUsers(): void
    {
        DB::table('users')->delete();
        User::create(['email' => 'admin@admin.com', 'password' => '123456']);
    }

    /**
     * Add some content
     */
    public function addContent(): void
    {
        DB::table('categories')->delete();
        Category::factory(5)->create();
        DB::table('articles')->delete();
        Article::factory(40)->create();
        DB::table('pages')->delete();
        \App\Models\Page::factory(6)->create(['parent_id' => null]);
        foreach (range(4, 5) as $p) {
        Page::factory(2)->create(['parent_id' => $p]);
        }
        $data=["KAMBING","SAPI","DOMBA"];
        DB::table('hewans')->delete();
        for($i=1;$i<=3;$i++){
            foreach (range(4, 7) as $p) {
            Hewan::create([
                'name' => $data[$i-1].'  '.$p,
                'weight_start'=>3,
                'weight_end'=>3,
                'image'=>'/i/hewan/'.$data[$i-1].'  '.$p.'.png',
                'category'=>$i,
                'price'=>1000000*$i
            ]);
        }
        }
        
    }
}
