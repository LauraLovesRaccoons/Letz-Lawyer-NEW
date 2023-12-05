<form action="{{ route('search') }}" method="get">
    <label for="category">Select a category:</label>
    <select name="category" id="category">
        <option value="">All Categories</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $selectedCategory == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    <button type="submit">Search</button>
</form>

@if ($lawyers->count() > 0)
    <h2>Search Results:</h2>
    <ul>
        @foreach ($lawyers as $lawyer)
            <li>{{ $lawyer->name }} - {{ $lawyer->email }}</li>
        @endforeach
    </ul>
@else
    <p>No lawyers found.</p>
@endif