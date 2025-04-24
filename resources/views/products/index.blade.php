<div class="container">
    <h1>Proizvodi</h1>

    @if(session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}">➕ Novi proizvod</a>

    <table border="1" cellpadding="10" style="width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naziv</th>
                <th>Kategorija</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}">👁️</a>
                        <a href="{{ route('products.edit', $product) }}">✏️</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Obrisati proizvod?')">🗑️</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">Nema proizvoda.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>