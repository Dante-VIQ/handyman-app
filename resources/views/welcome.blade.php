@extends('layouts.app')

@section('title', 'Amazing Palace – A Comfortable Home-Based Care Experience')

@section('description', 'Amazing Palace provides a warm, home-styled environment offering personalized care, comfort and
    support in a safe and welcoming setting.')

@section('keywords', 'home care, home based care, assisted living home, family care home, comfortable care environment')

@push('head')
    <link rel="canonical" href="{{ url('/') }}">
@endpush

@section('content')
    @include('new')
@endsection

@push('schema')
    @php
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'Amazing Palace',
            'url' => url('/'),
            'description' =>
                'A comfortable home-style care environment providing personalized support and supervision.',
            'areaServed' => [
                '@type' => 'Place',
                'name' => 'Auburn, Washington',
            ],
        ];
    @endphp

    <script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endpush
