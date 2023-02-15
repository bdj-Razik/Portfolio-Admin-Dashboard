@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
    {{-- <p {{ $attributes->merge(['class' => 'text-danger']) }}>{{ $message }}</p> --}}

@enderror
