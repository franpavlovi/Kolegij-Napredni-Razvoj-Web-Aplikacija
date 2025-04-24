<div class="container">
    <h1>Dodaj proizvod</h1>

    @if ($errors->any())
        <div style="color:red;">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Naziv:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="category_id">Kategorija:</label>
            <select name="category_id" id="category_id" required>
                <option value="">Odaberi</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Spremi</button>
    </form>

    <a href="{{ route('products.index') }}">← Natrag</a>
</div>