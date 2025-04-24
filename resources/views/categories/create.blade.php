<div class="container">
    <h1>Dodaj novu kategoriju</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Naziv:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="description">Opis:</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
        </div>

        <button type="submit">Spremi</button>
    </form>

    <a href="{{ route('categories.index') }}">← Natrag</a>
</div>