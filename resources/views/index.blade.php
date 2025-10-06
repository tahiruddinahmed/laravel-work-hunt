<x-layout>
    <x-showcase />

    <!-- Section Header -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Latest Job Opportunities</h2>
                <p class="text-lg text-gray-600">Find your next career move in tech and creative fields</p>
            </div>
            <!-- Job Listings Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @foreach ($jobs as $job)
                    <x-card :job='$job'></x-card>
                @endforeach
            </div>
        </div>

        <a href="{{ route('jobs.index') }}" class="block text-xl text-center">
          <i class="fa fa-arrow-alt-circle-right"></i>
          Show All Jobs
        </a>
    </section>

</x-layout>
