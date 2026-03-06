<x-admin-layout>
<form method="POST" action="{{ $action }}" enctype="multipart/form-data">
    @csrf
    @if(isset($team) && $team->id)
        @method('PUT')
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name *</label>
            <input type="text" name="name" id="name" value="{{ old('name', $team->name ?? '') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                   required>
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Title -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title *</label>
            <input type="text" name="title" id="title" value="{{ old('title', $team->title ?? '') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                   required>
            @error('title')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Specialty -->
        <div>
            <label for="specialty" class="block text-sm font-medium text-gray-700">Specialty *</label>
            <input type="text" name="specialty" id="specialty" value="{{ old('specialty', $team->specialty ?? '') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                   required>
            @error('specialty')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Icon Class -->
        <div>
            <label for="icon_class" class="block text-sm font-medium text-gray-700">Icon Class (FontAwesome)</label>
            <input type="text" name="icon_class" id="icon_class"
                   value="{{ old('icon_class', $team->icon_class ?? '') }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                   placeholder="fas fa-user-md">
            <p class="mt-1 text-sm text-gray-500">Leave empty for auto-detection based on specialty</p>
        </div>

        <!-- Image -->
        <div class="md:col-span-2">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image"
                   class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                   accept="image/*">
            @error('image')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror

            @if(isset($team) && $team->image)
                <div class="mt-2">
                    <img src="{{ $team->image_url }}" alt="Current image" class="h-32 w-32 object-cover rounded">
                    <p class="text-sm text-gray-500 mt-1">Current image</p>
                </div>
            @endif
        </div>

        <!-- Details -->
        <div class="md:col-span-2">
            <label for="details" class="block text-sm font-medium text-gray-700">Details *</label>
            <textarea name="details" id="details" rows="4"
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                      required>{{ old('details', $team->details ?? '') }}</textarea>
            @error('details')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Order -->
        <div>
            <label for="order" class="block text-sm font-medium text-gray-700">Display Order</label>
            <input type="number" name="order" id="order" value="{{ old('order', $team->order ?? 0) }}"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
    </div>

    <div class="mt-6 flex justify-end space-x-3">
        <a href="{{ route('team.index') }}"
           class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">
            Cancel
        </a>
        <button type="submit"
                class="px-4 py-2 bg-teal-600 text-white rounded-md text-sm font-medium hover:bg-teal-700 transition">
            {{ isset($team) ? 'Update' : 'Create' }}
        </button>
    </div>
</form>
</x-admin-layout>