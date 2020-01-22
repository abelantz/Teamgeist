<?php

use Faker\Factory;
use App\Models\Team;
use App\Models\User;
use App\Models\Member;
use App\Models\Invoice;
use App\Models\Category;
use App\Models\Membership;
use App\Models\Subcategory;
use App\Models\MembersCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();

        for($i = 0; $i < 3; $i++) {
            $category = Category::create([
                'title' => $faker->domainWord
            ]);
            for($j = 0; $j < 3; $j++) {
                $subcategory = Subcategory::create([
                    'title' => $faker->domainWord,
                    'category_id' => $category->id
                ]);
                for($k = 0; $k < 5; $k++) {
                    $team = Team::create([
                        'name' => $faker->company,
                        'category_id' => $category->id,
                        'subcategory_id' => $subcategory->id
                    ]);
                    for($l = 0; $l < 20; $l++) {
                        $name = $faker->name;
                        $user = User::create([
                            'name' => $name,
                            'email' => $faker->email,
                            'password' => Hash::make('password')
                        ]);
                        $membership = Membership::create([
                            'members_categories_id' => $k + 1,
                            'user_id' => $user->id
                        ]);
                        $invoice = Invoice::create([
                            'name' => $name,
                            'amount' => $faker->numberBetween($min = 1000, $max = 9000),
                            'paid' => 0
                        ]);
                        if(($team->id) % 19 == 0) {
                            $type = 'coach';
                        } else if(($team->id) % 18 == 0){
                            $type = 'assistant';
                        } else {
                            $type = 'player';
                        }
                        $teammember = Member::create([
                            'team_id' => $team->id,
                            'membership_id' => $membership->id,
                            'type' => $type
                        ]);
                    }
                }
            }
        }

        for($i = 0; $i < 5; $i++) {
            $membercategory = MembersCategory::create([
                'title' => $faker->company,
                'amount' => $faker->numberBetween($min = 1000, $max = 9000),
            ]);
        }


    }
}