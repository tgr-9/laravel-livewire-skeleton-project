<table {{ $attributes->merge([
    'class' => 'w-full text-sm text-left text-zinc-500 dark:text-zinc-400',
]) }}>
    {{ $slot }}
</table>
