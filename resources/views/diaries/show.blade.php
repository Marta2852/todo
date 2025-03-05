<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>

  <h1>{{ $diary->title }}</h1>
  <p>{{ $diary->body }}</p>

</x-layout>
