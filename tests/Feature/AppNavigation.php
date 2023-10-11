<?php

use App\Livewire\Layouts\AppNavigation;
use App\Models\User;

it('renders app navigation component successfully', function () {
    Livewire::test(AppNavigation::class)
        ->assertStatus(200);
});

it('can logout an user', function () {
    $user = User::factory()->create();
    $this->be($user);

    Livewire::test(AppNavigation::class)
        ->call('logout')
        ->assertRedirect(route('login'))
        ->assertStatus(200);
});
