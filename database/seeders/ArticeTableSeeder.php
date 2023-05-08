<?php

namespace Database\Seeders;

use App\Models\admin\Article;
use App\Models\admin\Author;
use Illuminate\Database\Seeder;

class ArticeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* Article::query()->insert([
           ['title'=>'PHP是最好的语言'],
           ['title'=>'Golang是最好的语言'],
           ['title'=>'c++是最好的语言'],
           ['title'=>'C是最好的语言'],
        ]);

        Author::query()->insert([
            ['name'=>'php','article_id'=>1],
            ['name'=>'golang','article_id'=>2],
            ['name'=>'c++','article_id'=>3],
            ['name'=>'c','article_id'=>4],
        ]);*/

        $cc = Article::query()->create([
            'title'=>'c#是最好的语言'
        ]);

             Author::query()->create([
                 'name'=>'c#','article_id'=>$cc->id
             ]);
    }
}
