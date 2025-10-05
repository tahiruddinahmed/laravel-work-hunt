@props(['job'])

@if ($job)
    <!-- Job Card Template -->
    <div class="group bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
        <div class="p-6">
            <!-- Company Header -->
            <div class=" mb-4">
                {{-- <img class="w-12 h-12 rounded-lg object-cover border border-gray-200" src="./images/logos/company1.jpg"
                    alt="Company logo"> --}}

                <div class="flex justify-between align-baseline">
                    <div class="">
                        <h3 class="text-xl font-semibold text-gray-900">{{ $job->title }}</h3>
                        <div class="flex items-center text-sm text-gray-500 mt-1">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <span>Company name</span>
                        </div>
                    </div>

                    <div>
                        <p class="px-2 py-1 bg-gray-100 rounded-md text-sm font-bold text-blue-600">{{ Str::ucfirst($job->experience) }}</p>
                    </div>
                </div>
            </div>

            <!-- Job Description -->
            <p class="text-gray-600 mb-5 leading-relaxed">
                {{ Str::limit($job->description, 150, '....') }}
            </p>

            <!-- Job Details -->
            <div class="space-y-3 text-sm">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium text-slate-700">{{ number_format($job->salary) }}</span>
                </div>

                <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="flex items-center">
                        {{ $job->location }}

                        {{-- <span
                            class="ml-2 px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">Local</span> --}}
                    </span>
                </div>

                <div class="flex items-start">
                    <svg class="w-5 h-5 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-gray-100 rounded-md text-sm text-gray-600">{{ $job->category->name }}</span>
                        {{-- <span class="px-2 py-1 bg-gray-100 rounded-md text-sm text-gray-600">Coding</span> --}}
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="mt-6">
                <x-link-button :href="route('jobs.show', $job)"> View Position </x-link-button>
            </div>
        </div>
    </div>
@endif


