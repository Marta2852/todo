<x-layout>
    <x-slot:title>Izveidot die­nas­grāmatas ierakstu</x-slot:title>

    <h1 class="page-title">Izveidot die­nas­grāmatas ierakstu</h1>

    <form method="POST" action="/diaries" class="form-container">
        @csrf

        <div class="form-group">
            <label for="title">Tituls:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required class="input-field"/>
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="body">Saturs:</label>
            <textarea name="body" id="body" required class="textarea-field">{{ old('body') }}</textarea>
            @error('body')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="date">Datums:</label>
            <input type="date" name="date" id="date" value="{{ old('date') }}" required class="input-field"/>
            @error('date')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="submit-btn">Saglabāt</button>
    </form>
</x-layout>
