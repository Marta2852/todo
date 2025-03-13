<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>

    <h1>Izveidot uzdevumu</h1>

    <form method="POST" action="/todos" class="form-container">
        @csrf

        <div class="form-group">
            <label for="content">Uzdevuma saturs:</label>
            <input type="text" name="content" id="content" value="{{ old('content') }}" required />
            @error('content')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="submit-button">Saglabāt</button>
    </form>

</x-layout>

