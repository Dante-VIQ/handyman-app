<div class="licenses-section py-4">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-4">
            {{-- <h1 class="text-4xl font-bold text-navy mb-4">Licenses & Accreditations</h1> --}}
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Explore our official certifications and accreditations that demonstrate our commitment to quality and
                compliance.
            </p>
        </div>

        <!-- Licenses Grid -->
        @if ($licenses->count())
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-6">
                @foreach ($licenses as $license)
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-100 {{ $license->is_expired ? 'opacity-80' : '' }}">
                        <!-- Header with Icon -->
                        <div class="p-6 pb-4">
                            <div class="flex items-start">
                                <div
                                    class="w-14 h-14 {{ $license->icon_bg_color }} rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <i class="{{ $license->icon }} text-white text-2xl"></i>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="font-bold text-xl text-navy mb-1 line-clamp-2">{{ $license->title }}</h3>
                                    @if ($license->issuing_authority)
                                        <p class="text-sm text-gray-600">By: {{ $license->issuing_authority }}</p>
                                    @endif
                                </div>
                                <button wire:click="viewDocument({{ $license->id }})"
                                    class="flex-1 inline-flex items-center justify-center px-4 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all duration-200 group">
                                    <i class="far fa-eye mr-2 group-hover:scale-110 transition-transform"></i>
                                    View
                                </button>
                            </div>
                        </div>

                        <!-- Description -->
                        @if ($license->description)
                            <div class="px-6 pb-4">
                                <p class="text-gray-700 line-clamp-3">{{ $license->description }}</p>
                            </div>
                        @endif

                        <!-- Dates & Status -->
                        <div class="px-6 pb-4 space-y-2">
                            @if ($license->issue_date)
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-calendar-alt mr-2 text-blue-500"></i>
                                    <span>Issued: {{ $license->issue_date->format('M d, Y') }}</span>
                                </div>
                            @endif


                        </div>

                        <!-- Document Info -->
                        <div class="px-6 py-3 bg-gray-50 border-t border-gray-100">
                            <div class="flex items-center justify-between text-xs text-gray-500">
                                <div class="flex items-center">
                                    <i class="fas fa-file mr-1"></i>
                                    <span class="truncate max-w-[200px]">{{ $license->document_original_name }}</span>
                                </div>
                                <span
                                    class="uppercase font-medium">{{ strtoupper(pathinfo($license->document_original_name, PATHINFO_EXTENSION)) }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if ($licenses->hasPages())
                <div class="mt-8">
                    {{ $licenses->links() }}
                </div>
            @endif
        @else
            <!-- Empty State -->
            <div class="text-center py-16 bg-white rounded-xl shadow-lg">
                <div class="w-24 h-24 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-file-alt text-4xl text-gray-400"></i>
                </div>
                <h3 class="text-2xl font-semibold text-gray-700 mb-2">No documents found</h3>
                <p class="text-gray-500 mb-6 max-w-md mx-auto">
                    @if ($filter !== 'all' || $search)
                        Try adjusting your filters or search terms
                    @else
                        No licenses or accreditations are available at the moment
                    @endif
                </p>
                @if ($filter !== 'all' || $search)
                    <button wire:click="resetFilters"
                        class="inline-flex items-center px-6 py-3 bg-navy text-white rounded-lg hover:bg-blue-800 transition-all duration-200">
                        <i class="fas fa-redo-alt mr-2"></i>
                        Reset Filters
                    </button>
                @endif
            </div>
        @endif

        <!-- Additional Info -->

    </div>

    <!-- JavaScript for PDF viewer -->
    @push('scripts')
        <script>
            // Listen for Livewire event to open PDF in new tab
            Livewire.on('openPdf', (data) => {
                window.open(data.url, '_blank');
            });

            // Listen for alert events
            Livewire.on('alert', (data) => {
                Swal.fire({
                    icon: data.type,
                    title: data.type === 'success' ? 'Success!' : 'Error!',
                    text: data.message,
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            });

            // Initialize tooltips
            document.addEventListener('DOMContentLoaded', function() {
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                const tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl);
                });
            });
        </script>
    @endpush
</div>
