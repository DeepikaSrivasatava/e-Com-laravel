<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'LG Mobile',
            'price'=>'10000',
            'gallery'=>'https://www.amazon.in/Samsung-Galaxy-Mirage-Black-Storage/dp/B07DJLVHYC?source=ps-sl-shoppingads-lpcontext&psc=1',
            'category'=>'Mobile',
            'description'=>('A smart phone with 4gb ram and much more feature'),
        ]);

        DB::table('products')->insert([
            'name'=>'Apple Mobile',
            'price'=>'80000',
            'gallery'=>'https://www.amazon.in/Apple-iPhone-Black-32GB-Storage/dp/B01LZKSVRB/ref=sr_1_1?dchild=1&qid=1605963572&refinements=p_6%3AA14CZOWI0VEHLG%7CA1P3OPO356Q9ZB%7CA2HIN95H5BP4BL%2Cp_89%3AApple&s=electronics&sr=1-1',
            'category'=>'Mobile',
            'description'=>('A smart phone with 16gb ram and much more feature'),
        ]);
    }
}
