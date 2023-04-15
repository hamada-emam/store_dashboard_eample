<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Category>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => "hamada",
            'email' => "hamada.eme.tech@gmain.com",
            'type' => "admin",
            'email_verified_at' => now(),
            'password' => '$2y$10$U2V4t3uZR6q80EcP9OpRwuv9fyROPm4O6GSJqxxkcrVfsCYbPxDsG', // password
            'remember_token' => Str::random(10),
        ];
    }
}
