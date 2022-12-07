@extends('parent')

@section("content")
        @if ($tampilkanPeserta)
        <ul>
            @foreach ( $peserta as $p )
                <li>{{ $p }}</p>
            @endforeach
        </ul>
    @endif
    <a href="{{ route('HomePage') }}">Back</a>
@endsection