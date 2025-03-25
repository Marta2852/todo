   <x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>
  <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>

  <div class="button-container">
    <a href="/todos/{{ $todo->id }}/edit" class="edit-button">Rediģēt</a>
  </div>
</x-layout>

