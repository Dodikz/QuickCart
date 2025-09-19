<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <x-card class="flex flex-col items-center gap-4 bg-gray-400 dark:bg-gray-800">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900">
                    <x-icon.dollar-sign class="h-6 w-6 text-indigo-600 dark:text-indigo-300" />
                </div>
                <div class="flex flex-col items-center">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 sm:text-base">Total sales</h3>
                    <p class="text-2xl font-semibold text-gray-900 dark:text-white sm:text-3xl"> $100</p>
                </div>
            </x-card>a

            <x-card class="flex flex-col items-center gap-4 bg-gray-400 dark:bg-gray-800">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-green-100 dark:bg-green-900">
                    <x-icon.shopping-cart class="h-6 w-6 text-green-600 dark:text-green-300" />
                </div>
                <div class="flex flex-col items-center">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 sm:text-base">Total orders</h3>
                    <p class="text-2xl font-semibold text-gray-900 dark:text-white sm:text-3xl">250</p>
                </div>
            </x-card>

            <x-card class="flex flex-col items-center gap-4 bg-gray-400 dark:bg-gray-800">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-amber-100 dark:bg-amber-900">
                    <x-icon.package class="h-6 w-6 text-amber-600 dark:text-amber-300" />
                </div>
                <div class="flex flex-col items-center">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 sm:text-base">Total products</h3>
                    <p class="text-2xl font-semibold text-gray-900 dark:text-white sm:text-3xl">35</p>
                </div>
            </x-card>
            a

            <x-card class="flex flex-col items-center gap-4 bg-gray-400 dark:bg-gray-800">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-purple-100 dark:bg-purple-900">
                    <x-icon.users class="h-6 w-6 text-purple-600 dark:text-purple-300" />
                </div>
                <div class="flex flex-col items-center">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 sm:text-base">Total customers</h3>
                    <p class="text-2xl font-semibold text-gray-900 dark:text-white sm:text-3xl">75</p>
                </div>
            </x-card>
        </div>

        <x-card>
            testig
            anjay
        </x-card>
    </div>
</x-layouts.app>
