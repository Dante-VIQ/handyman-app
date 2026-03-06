@props(['teamMembers'])
<div class="max-w-4xl w-full flex flex-col p-6 justify-center mx-auto">

    <h1 class="text-2xl font-bold mb-4">Team Members</h1>

    <a href="{{ route('team.create') }}" class="px-4 py-2 bg-primary text-white rounded mb-4 inline-block outline-none">+ Add
        Member</a>

    <div>
        @if ($teamMembers && $teamMembers->count())
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Title</th>
                        <th class="p-2">Image</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($teamMembers as $member)
                        <tr>
                            <td class="p-3">{{ $member->id }}</td>
                            <td class="p-3">{{ $member->title }}</td>
                            <td class="p-3">

                                <img src="{{ $member->image ? asset($member->image) : asset('images/default.png') }}"
                                    alt="{{ $member->title }}" width="50">

                            </td>
                            <td class="p-2">
                                <a href="{{ route('team.edit', $member->id) }}" class="text-blue-600">Edit</a>

                                <form action="{{ route('team.destroy', $member) }}" method="POST" class="mt-4">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-3 py-2 bg-red-600 text-white rounded-lg">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- {{ $teams->links() }} --}}
        @else
            <p class="text-gray-500">No team members found.</p>
        @endif
    </div>


</div>
