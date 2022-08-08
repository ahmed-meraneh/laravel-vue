<?php

use App\Models\User;

it('can fetch all users', function () {
    $response = $this->getJson('/api/users');

    $response->assertStatus(200);
});

it('can retrieve a specific user', function () {
    $user = User::factory()->create();

    $response = $this->getJson("/api/users/{$user->id}");

    $data = [
        'data' => [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'created_at' => $user->created_at->format('d/m/Y'),
            'updated_at' => $user->updated_at->format('d/m/Y'),
        ]
    ];

    $response->assertStatus(200)->assertJson($data);
});

it('can create a user', function () {
    $attributes = User::factory()->raw();

    $response = $this->postJson('/api/users', $attributes);

    $response->assertStatus(201);

});

it('can update a user', function () {
    $user = User::factory()->create();

    $updateUser = [
        'name' => "Ahmed Ibrahim",
        'email' => "ahmed.ibrahim@ansie.dj",
        'password' => bcrypt("password")
    ];

    $response = $this->putJson("/api/users/{$user->id}", $updateUser);

    $response->assertStatus(201);

});

it('can delete a user', function () {
    $user = User::factory()->create();

    $response = $this->deleteJson("/api/users/{$user->id}");

    $response->assertStatus(204);

    $this->assertDatabaseMissing('users', $user->toArray());
});
