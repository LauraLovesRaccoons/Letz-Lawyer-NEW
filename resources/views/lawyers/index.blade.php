<form action="{{ route('lawyers.search') }}" method="GET">
    <label for="category">Category:</label>
    <select name="category" id="category">
        <option value="">Select Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <button type="submit">Search</button>
</form>
