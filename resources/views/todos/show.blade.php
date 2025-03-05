   <x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>
</x-layout>

<h2>Complete? {{ $todo->completed ? "Ja" : "Ne" }}</h2>
