<?php

namespace App\Livewire\Layouts;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;

class AdminSidebar extends Component
{
    public function disableAdminMode(): void
    {
        session()->forget('auth.password_confirmed_at');
        $this->redirect(route('user.dashboard'), navigate: true);
    }

    public function logout(): void
    {
        Auth::guard('web')->logout();
        $this->redirect(session('url.intended', route('login')), navigate: true);
        if (session()->has('auth.password_confirmed_at')) {
            session()->forget('auth.password_confirmed_at');
        }
        session()->invalidate();
        session()->regenerateToken();
    }

    public function render(): View
    {
        return view('layouts.admin-sidebar');
    }
}
