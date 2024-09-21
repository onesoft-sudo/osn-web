<x-app-layout>
    <main class="px-3 lg:px-0 lg:w-1/2 text-center mx-auto">
        <h1 class="text-4xl text-orange-500">404 Not Found</h1>
        <h3 class="text-2xl mt-2">Page not found</h3>
        <p class="mt-5">The requested URL was not found on this server.</p>
        <hr class="border-t-neutral-200 mt-4 dark:border-t-neutral-200/20" />
        <a href="{{ route('home') }}" class="mt-3 block text-blue-500 hover:underline">Go back to Home</a>
    </main>
</x-app-layout>
