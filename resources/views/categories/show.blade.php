<div class="container">
    <h1>Pregled kategorije</h1>

    <p><strong>Naziv:</strong> {{ $category->name }}</p>
    <p><strong>Opis:</strong> {{ $category->description }}</p>

    <a href="{{ route('categories.index') }}">← Natrag</a>
    <a href="{{ route('categories.edit', $category) }}">✏️ Uredi</a>

    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Jesi siguran da želiš obrisati?')">🗑️ Obriši</button>
    </form>
</div>