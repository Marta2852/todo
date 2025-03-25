<x-layout>
  <x-slot:title>
    Ieraksta Rediģēšana
  </x-slot:title>

  <h1>Ieraksta Rediģēšana</h1>

  <form method="POST" action="/diaries/{{ $diary->id }}">
      @csrf
      @method('PUT')

      <div class="form-group">
          <label for="title">Uzdevuma saturs:</label>
          <input type="text" name="title" id="title" value="{{ $diary->title }}" required class="input-field"/>
            @error("completed")
            <p>{{ $message }}</p>
            @enderror
      </div>

      <div class="form-group">
          <label for="body">Uzdevuma saturs:</label>
          <input type="text" name="body" id="body" value="{{ $diary->body }}" required class="input-field"/>
            @error("completed")
            <p>{{ $message }}</p>
            @enderror
      </div>

      <div class="form-group">
          <label for="date">Uzdevuma saturs:</label>
          <input type="text" name="date" id="date" value="{{ $diary->date }}" required class="input-field"/>
            @error("completed")
            <p>{{ $message }}</p>
            @enderror
      </div>

      <button type="submit" class="submit-button">Saglabāt izmaiņas</button>

  </form>
</x-layout>