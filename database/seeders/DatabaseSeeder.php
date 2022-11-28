<?php

namespace Database\Seeders;

use App\Actions\Jetstream\CreateTeam;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $andy = \App\Models\User::factory()->create(['name' => 'Andy Newhouse', 'email' => 'hi@andymnewhouse.me']);
        $mir = \App\Models\User::factory()->create(['name' => 'Miriam Newhouse', 'email' => 'joecoolsnoopydog@gmail.com']);
        $newhouseTeam = (new CreateTeam)->create($andy, ['name' => 'Newhouse Family']);
        $swickTeam = (new CreateTeam)->create($andy, ['name' => 'Swick Family']);

        $andy->switchTeam($newhouseTeam);

        \App\Models\Recipe::factory()->create(['user_id' => $mir->id, 'team_id' => $newhouseTeam->id, 'name' => 'Ice Box Cake', 'ingredients' => '2 sticks of unsalted butter, 4 cups of powdered sugar, 4 well beaten eggs (or egg substitute), 4 teaspoons of vanilla, 2 -8 oz. bars of Germans\'s Sweet Chocolate, 4 dozen Lady fingers (4 packages)', 'directions' => '1. Soften butter with mixer. 2. Melt chocolate on defrost in microwave then combine with butter. 3. Beat eggs for 5 minutes. 4. Add 1/8 of eggs to chocolate mixture and beat well. 5. Add 1/2 cup of powdered sugar to chocolate mixture and beat well. 6. Add vanilla and beat well. 7. Assemble cake in 10" spring-form pan by layering 1 dozen of split lady fingers then 1/4 of chocolate mixture. 8. Refrigerate 1-2 days.']);
        \App\Models\Recipe::factory()->create(['user_id' => $mir->id, 'team_id' => $newhouseTeam->id, 'name' => 'Nut Cups', 'ingredients' => '3 oz. cream cheese, 1 stick of butter, 1 cup flour, 1 beaten egg, 3/4 c dark brown sugar, 1 t vanilla, 3/4 c chopped pecans', 'directions' => '1. Preheat oven 350 2. Grease and flour 24-cup mini cupcake pan 3. Mix first 3 ingredients until smooth and roll into 24 balls 4. Mix remaining ingredients, except pecans 5. Mix in pecans 6. Scoop into mini cupcake pan 7. Bake at 350 for 17 minutes, then 250 for 10 minutes 8. When cool, sprinkle with powdered sugar.']);
        \App\Models\Recipe::factory()->create(['user_id' => $mir->id, 'team_id' => $newhouseTeam->id, 'name' => 'Snowy Mashed Potatoes', 'ingredients' => '4 lbs peeled potatoes, 8 oz cream cheese, softened, 1 c sour cream, 2 t salt, 1 clove garlic, crushed, 1/4 c chopped chives, 1/2 t paprika, 1 T butter', 'directions' => 'Preheat Oven 350. 2. Cook potatoes in boiling salted water for 15 minutes or until tender. Drain. 3. Mash potatoes using a potato ricer. 4. Add cream cheese, salt, pepper, garlic and a little milk then blend. 5. Spoon into a lightly greased 10 cup backing dish (3 qt.). 6. Sprinkle with chives and paprika then dot with butter. 7. Bake for 30 minutes or until lightly golden and heated through.']);
    }
}
