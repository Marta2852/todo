<x-layout>
  <x-slot:title>
    Ieraksta Rediģēšana
  </x-slot:title>

  <h1>Ieraksta Rediģēšana</h1>

  <form method="POST" action="/todos/{{ $todo->id }}">
      @csrf
      @method('PUT')

      <div class="form-group">
          <label for="content">Uzdevuma saturs:</label>
          <input type="text" name="content" id="content" value="{{ $todo->content }}" required class="input-field"/>
            @error("completed")
            <p>{{ $message }}</p>
            @enderror
      </div>

      <button type="submit" class="submit-button">Saglabāt izmaiņas</button>

      <label>
        Izpildīts:
        <input name="completed" type="hidden" value="0">
        <input name="completed" type="checkbox" value="1" {{ $todo->completed ? 'checked' : '' }}>
            @error("completed")
            <p>{{ $message }}</p>
            @enderror
    </label>

  </form>
</x-layout>