<div {{ $attributes->merge([
    'class' =>
        'rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 p-6 shadow-xs',
]) }}>
    {{ $slot }}
</div>
