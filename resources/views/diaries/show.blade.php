<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>
  
  <h1>{{ $diary->title }}</h1>
  <p>{{ $diary->body }}</p>

  <div class="button-container">
    <a href="/diaries/{{ $diary->id }}/edit" class="edit-button">Rediģēt</a>

    <form action="/diaries/{{ $diary->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="delete-button">Dzēst</button>
</form>

  </div>

</x-layout>
