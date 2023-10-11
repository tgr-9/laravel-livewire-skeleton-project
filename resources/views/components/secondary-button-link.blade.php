<a
    {{ $attributes->merge([
        'class' =>
            'inline-block rounded-md bg-white dark:bg-gray-800 px-3 py-2 text-sm font-semibold dark:text-white hover:bg-gray-100 dark:hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600',
    ]) }}>
    {{ $slot }}
</a>
