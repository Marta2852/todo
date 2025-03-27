   <x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>
  <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>

  <div class="button-container">
    <a href="/todos/{{ $todo->id }}/edit" class="edit-button">Rediģēt</a>

    <form action="/todos/{{ $todo->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="delete-button">Dzēst</button>
</form>

    
</div>
</x-layout>

