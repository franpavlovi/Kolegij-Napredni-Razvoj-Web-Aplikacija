<div class="container">
    <h1>Uredi kategoriju</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Naziv:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" required>
        </div>

        <div>
            <label for="description">Opis:</label>
            <textarea name="description" id="description">{{ old('description', $category->description) }}</textarea>
        </div>

        <button type="submit">Ažuriraj</button>
    </form>

    <a href="{{ route('categories.index') }}">← Natrag</a>
</div>