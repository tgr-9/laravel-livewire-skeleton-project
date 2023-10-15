<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            <a wire:navigate href="{{ route('admin.users.index') }}" class="hover:underline">
                {{ __('Users') }}
            </a>
            /
            {{ $user->name }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <x-button-link wire:navigate href="{{ route('admin.users.edit', $user) }}">
            {{ __('Edit') }}
        </x-button-link>
    </x-slot>

    <div class="py-2 space-y-2 sm:py-8 sm:space-y-8">
        <x-app-card maxWidth="full">
            <x-slot name="title">
                {{ __('Details User') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Show details of user data.') }}
            </x-slot>

            <x-slot name="content">
                <dl class="space-y-4 sm:space-y-2">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="block ">
                            {{ __('Id') }}
                        </dt>
                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                            {{ $user->id }}
                        </dd>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="block ">
                            {{ __('Name') }}
                        </dt>
                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                            {{ $user->name }}
                        </dd>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="block ">
                            {{ __('Email Address') }}
                        </dt>
                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                            {{ $user->email }}
                        </dd>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="block ">
                            {{ __('Email Status') }}
                        </dt>
                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                            @if ($user->email_verified_at)
                                <x-badge type="success">
                                    {{ __('Verified') }}
                                </x-badge>
                            @else
                                <x-badge type="danger">
                                    {{ __('Not Verified') }}
                                </x-badge>
                            @endif
                        </dd>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="block ">
                            {{ __('Created At') }}
                        </dt>
                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                            {{ $user->created_at->format('d M Y H:i') }}
                        </dd>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                        <dt class="block ">
                            {{ __('Updated At') }}
                        </dt>
                        <dd class="mt-1 sm:col-span-2 sm:mt-0">
                            {{ $user->updated_at->format('d M Y H:i') }}
                        </dd>
                    </div>
                </dl>
            </x-slot>
        </x-app-card>
    </div>
</div>
