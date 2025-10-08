<x-layout>
    <!-- Section Header -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            {{-- breadcrumb --}}
            <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]" />

            {{-- filter/search job --}}
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <form action="{{ route('jobs.index') }}" method="GET" class="space-y-6">

                    <!-- Search & Salary Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Search Field -->
                        <div>
                            <x-forms.label for="search"
                                class="block text-sm font-medium text-gray-700">Search</x-forms.label>
                            <x-forms.text-input name="search" value="{{ request('search') }}"
                                placeholder="Search for any job"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                        </div>

                        <!-- Salary Range -->
                        <div>
                            <x-forms.label for="salary" class="block text-sm font-medium text-gray-700">Salary
                                Range</x-forms.label>
                            <div class="flex gap-4">
                                <x-forms.text-input name="min_salary" value="{{ request('min_salary') }}"
                                    placeholder="From"
                                    class="w-1/2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                                <x-forms.text-input name="max_salary" value="{{ request('max_salary') }}"
                                    placeholder="To"
                                    class="w-1/2 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                        <!-- Filter Button -->
                        <div class="md:col-span-2">
                            <button type="submit"
                                class="w-full flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-3 rounded-md shadow-md transition duration-200">
                                <i class="fa fa-search"></i>
                                <span>Filter</span>
                            </button>
                        </div>

                        <!-- Reset Link -->
                        <div class="md:col-span-1">
                            <a href="{{ route('jobs.index') }}"
                                class="w-full block text-center bg-gray-600 hover:bg-gray-700 text-white font-semibold px-5 py-3 rounded-md shadow-md transition duration-200">
                                Reset
                            </a>
                        </div>
                    </div>

                </form>
            </div>

            <!-- Job Listings Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @forelse ($jobs as $job)
                    <x-card :job='$job'></x-card>
                @empty
                    <p class="text-center text-xl underline text-slate-700 col-span-3 mt-6">No Match Found</p>
                @endforelse
            </div>
        </div>

        @if ($jobs->count())
            {{ $jobs->links() }}
        @endif
    </section>


</x-layout>
