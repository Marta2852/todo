   <x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>
  <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
</x-layout>

