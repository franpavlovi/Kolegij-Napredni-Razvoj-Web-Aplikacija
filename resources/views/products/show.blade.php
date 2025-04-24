<div class="container">
    <h1>Detalji proizvoda</h1>

    <p><strong>Naziv:</strong> {{ $product->name }}</p>
    <p><strong>Kategorija:</strong> {{ $product->category->name ?? 'N/A' }}</p>

    <a href="{{ route('products.index') }}">← Natrag</a>
    <a href="{{ route('products.edit', $product) }}">✏️ Uredi</a>

    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Obrisati proizvod?')">🗑️ Obriši</button>
    </form>
</div>