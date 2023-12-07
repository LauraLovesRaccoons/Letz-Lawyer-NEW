@extends('layout')

@section('content')
    <h2>Welcome to the Category Page</h2>

    <div>
        <!-- Your content related to the selected category goes here -->
        <!-- This section will display information about the selected category -->

        @if ($category)
            <h3>Selected Category:</h3>
            <p>Name: {{ $category->name }}</p>
            <p>Description: {{ $category->description }}</p>
            <!-- Add any other category-related details you want to display -->
        @else
            <p>No category selected.</p>
        @endif

        <!-- Example content (replace this with your actual category-specific content) -->
        <!-- You can add more specific details or customize this section based on the selected category -->
        <div>
            <h3>Category-Specific Details</h3>
            <!-- Add content related to the selected category here -->
            <!-- For instance, list posts or lawyers related to this category -->
        </div>
    </div>
@endsection
