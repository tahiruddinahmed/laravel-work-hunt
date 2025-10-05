<x-layout>

    <main class="container mx-auto px-4 py-8">
      <!-- Job Header Section -->
      <div
        class="bg-white rounded-xl p-6 shadow-sm mb-4"
      >
        <div
          class="flex flex-col md:flex-row justify-between items-start md:items-center"
        >
          <div class="mb-4 md:mb-0">
            <h1 class="text-3xl font-bold">{{ $job->title }}</h1>
            <div class="flex items-center flex-wrap gap-2 mt-2">
              <span class="bg-blue-100/20 px-3 py-1 rounded-full text-sm"
                >Company Name</span
              >
              <span class="bg-blue-100/20 px-3 py-1 rounded-full text-sm"
                >{{ $job->experience }}</span
              >
              <span class="flex items-center">
                <i class="fas fa-map-marker-alt mr-2"></i>
              {{ $job->location }}
              </span>
            </div>
          </div>
          {{-- <div class="flex gap-3">
            <a
              href="edit-job.html"
              class="px-6 py-2 bg-white/10 hover:bg-white/20 rounded-lg transition-colors"
            >
              Edit Job
            </a>
            <button
              class="px-6 py-2 bg-red-500/90 hover:bg-red-600 rounded-lg transition-colors"
            >
              Delete
            </button>
          </div> --}}
        </div>
      </div>

      <div class="grid lg:grid-cols-12 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-8 space-y-6">
          <!-- Job Highlights -->
          <div class="bg-white rounded-xl p-6 shadow-sm">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
              <div class="p-4">
                <p class="text-gray-500 text-sm">Salary</p>
                <p class="text-xl font-bold text-blue-600">₹ {{ number_format($job->salary) }}</p>
              </div>
              <div class="p-4">
                <p class="text-gray-500 text-sm">Experience</p>
                <p class="text-xl font-bold text-blue-600">{{ Str::ucfirst($job->experience) }}</p>
              </div>
              {{-- <div class="p-4">
                <p class="text-gray-500 text-sm">Applications</p>
                <p class="text-xl font-bold text-blue-600">25</p>
              </div> --}}
            </div>
          </div>

          <!-- Job Details -->
          <div class="bg-white rounded-xl p-6 shadow-sm">
            <h2 class="text-2xl font-bold mb-4 text-blue-800">
              Job Description
            </h2>
            <p class="text-gray-600 leading-relaxed">
                {!! nl2br(e($job->description)) !!}
            </p>

            {{-- <div class="mt-8">
              <h3 class="text-xl font-semibold mb-3 text-blue-700">
                <i class="fas fa-tasks mr-2"></i>Requirements
              </h3>
              <ul class="list-disc pl-6 space-y-2 text-gray-600">
                <li>Bachelor's degree in Computer Science or related field</li>
                <li>3+ years professional development experience</li>
                <li>Proficiency in JavaScript/TypeScript</li>
                <li>Experience with React/Node.js</li>
                <li>Strong problem-solving skills</li>
              </ul>
            </div> --}}

            {{-- <div class="mt-8">
              <h3 class="text-xl font-semibold mb-3 text-blue-700">
                <i class="fas fa-star mr-2"></i>Benefits
              </h3>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                  <i class="fas fa-heartbeat text-blue-600 text-xl w-8"></i>
                  <div>
                    <p class="font-medium">Health Insurance</p>
                    <p class="text-sm text-gray-500">
                      Comprehensive medical coverage
                    </p>
                  </div>
                </div>
                <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                  <i class="fas fa-dumbbell text-blue-600 text-xl w-8"></i>
                  <div>
                    <p class="font-medium">Gym Membership</p>
                    <p class="text-sm text-gray-500">Fitness program subsidy</p>
                  </div>
                </div>
              </div>
            </div> --}}

            <x-button>Apply Now</x-button>
          </div>
        </div>

        <!-- Sidebar -->
        {{-- <div class="lg:col-span-4 space-y-6">
          <!-- Company Card -->
          <div class="bg-white rounded-xl p-6 shadow-sm">
            <div class="text-center mb-4">
              <img
                src="/images/logos/company2.jpg"
                alt="Company Logo"
                class="w-32 h-32 rounded-full mx-auto mb-4 object-cover"
              />
              <h2 class="text-xl font-bold text-blue-800">
                Tech Innovators Ltd
              </h2>
              <p class="text-gray-500">Technology & Software Development</p>
            </div>

            <div class="space-y-4">
              <div class="flex items-start">
                <i class="fas fa-globe text-blue-600 mt-1 mr-3"></i>
                <div>
                  <p class="font-medium">Website</p>
                  <a href="#" class="text-blue-600 hover:underline"
                    >www.techinnovators.com</a
                  >
                </div>
              </div>
              <div class="flex items-start">
                <i class="fas fa-users text-blue-600 mt-1 mr-3"></i>
                <div>
                  <p class="font-medium">Company Size</p>
                  <p class="text-gray-600">50-100 Employees</p>
                </div>
              </div>
              <div class="flex items-start">
                <i class="fas fa-clock text-blue-600 mt-1 mr-3"></i>
                <div>
                  <p class="font-medium">Posted</p>
                  <p class="text-gray-600">3 days ago</p>
                </div>
              </div>
            </div>

            <button
              class="w-full mt-6 bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg transition-colors"
            >
              Apply Now
            </button>
          </div>

          <!-- Location Map -->
          <div class="bg-white rounded-xl p-6 shadow-sm">
            <h3 class="text-lg font-semibold mb-4 text-blue-800">
              <i class="fas fa-map-marker-alt mr-2"></i>Location
            </h3>
            <div class="aspect-video bg-gray-100 rounded-lg overflow-hidden">
              <!-- Replace with actual map component -->
              <div
                class="w-full h-full flex items-center justify-center text-gray-400"
              >
                <i class="fas fa-map text-3xl"></i>
              </div>
            </div>
            <p class="mt-3 text-gray-600">
              Boribandha, 420 Near Jame Masjid, Morigaon
            </p>
          </div>
        </div> --}}
      </div>
    </main>

</x-layout>