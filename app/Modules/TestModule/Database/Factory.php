<?php
namespace App\Modules\TestModule\Database;

use Illuminate\Database\Eloquent\Factories\Factory as FactoryClass;

class Factory extends FactoryClass
{
    /**
     * Run the database factory.
     */
    static $model = \App\Modules\TestModule\Models\Model::class;
    public function definition()
    {
        return [
            'title' => $this->faker->title,
        ];
    }
}