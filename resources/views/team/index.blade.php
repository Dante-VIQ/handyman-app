<x-admin-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-semibold text-gray-900 mb-6">Care Team Members</h1>
                <div class="mb-4">
                    <a href="{{ route('team.create') }}"
                       class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                        <i class="fas fa-plus mr-2"></i> Add New Member
                    </a>
                </div>
                <x-team-members-table :teamMembers="$teamMembers" />
            </div>
        </div>
    </div>
</x-admin-layout>
