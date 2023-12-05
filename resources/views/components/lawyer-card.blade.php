@props(['lawyer'])

<x-card>

    <div class="flex"> 
        <img class="hidden w-48 mr-6 md:block" src="{{ $lawyer->logo ? asset('storage/' . $lawyer->logo) : asset('images/avocat.png')}}" alt=""/>
        <div>
            <h3 class="text-2xl">
                <a href="/lawyers/{{$lawyer->id}}">{{$lawyer->title}}</a>
            </h3>
<br>
            <x-lawyer-tags :tags="$lawyer->tags"/>

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $lawyer->location }}
            </div>
        </div>
    </div>
</x-card>