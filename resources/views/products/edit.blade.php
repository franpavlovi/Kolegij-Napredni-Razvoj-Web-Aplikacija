<div class="container">
    <h1>Uredi proizvod</h1>

    @if ($errors->any())
        <div style="color:red;">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Naziv:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        </div>

        <div>
            <label for="category_id">Kategorija:</label>
            <select name="category_id" id="category_id" required>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Spremi promjene</button>
    </form>

    <a href="{{ route('products.index') }}">← Natrag</a>
</div>