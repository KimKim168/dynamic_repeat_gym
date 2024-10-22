@extends('layouts.client')
@section('content')
    <div class="no-tailwind max-w-screen-xl mx-auto mt-32">
        <div>
            {!! $tip->description !!}
        </div>

    </div>
@endsection
