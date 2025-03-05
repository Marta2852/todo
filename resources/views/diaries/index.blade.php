<x-layout>
  <x-slot:title>
  Visi diensgrāmatas ieraksti
  </x-slot:title>

<h1>Visi diensgrāmatas ieraksti</h1>

<ul>
    @foreach ($diaries as $diary)
      <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
    @endforeach
  </ul>

</x-layout>