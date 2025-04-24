
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- @extends('layouts.master') --}}
    {{-- @section('title')
        profiles
    @endsection --}}
    {{-- @section('main') --}}
    <x-master-components title="profiles">
        <div class="d-flex gap-3 flex-wrap w-50 mx-auto border mt-5">
            @forelse ($profiles as $profile)

            <x-profiles-components :profile="$profile"/>

            @empty
                <p>No profiles found.</p>
            @endforelse
            <div>
                {{$profiles->links()}}
            </div>
        </div>
    </x-master-components>
    {{-- @endsection --}}
