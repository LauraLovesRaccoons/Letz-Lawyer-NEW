{{-- To overide/add classes to oour component we need to merge the attributes --}}
{{-- $attributes represents all the attributes our component has been passed --}}
<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{$slot}}
    {{-- The $slot variable is the placeholder for all content to be inserted --}}
</div>