<x-layout>
    <x-slot:title>
    Dienasgrāmatas ieraksta rediģēšana
    </x-slot:title>

    <div class="form-container">
        <h1 class="page-title">Dienasgrāmatas ieraksta rediģēšana</h1>

        <form method="POST" action="/diaries/{{ $diary->id }}" class="blog-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Tituls:</label>
                <input type="text" name="title" id="title" value="{{ old('title', $diary->title) }}" required class="input-field"/>
                @error('title')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="body">Saturs:</label>
                <textarea name="body" id="body" required class="textarea-field">{{ old('body', $diary->body) }}</textarea>
                @error('body')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="date">Datums:</label>
                <input type="date" name="date" id="date" value="{{ old('date', $diary->date) }}" required class="input-field"/>
                @error('date')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="button-container">
                <button type="submit" class="submit-button">Saglabāt izmaiņas</button>
            </div>
        </form>
    </div>
</x-layout>
