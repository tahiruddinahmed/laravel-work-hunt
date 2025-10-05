<a href="{{ $href }}"
    class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md font-medium text-white bg-indigo-600 hover:bg-indigo-700 transition-colors duration-200">
    {{ $slot }}
    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
    </svg>
</a>
