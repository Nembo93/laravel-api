<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['E-commerce', 'Social-media', 'Pubblicità', 'Gestionale'];

        foreach( $types as $type ) {
            $new_type = new Type();
            $new_type->name = $type;
            $new_type->slug = Str::slug($new_type->name);
            $new_type->save();
    }
}
}


// {
//     $technologies = ['Html', 'Css', 'Js', 'Php'];

//     foreach( $technologies as $technology ) {
//         $new_technology = new Technology();
//         $new_technology->name = $technology;
//         $new_technology->slug = Str::slug($new_technology->name);
//         $new_technology->save();
// }
// }