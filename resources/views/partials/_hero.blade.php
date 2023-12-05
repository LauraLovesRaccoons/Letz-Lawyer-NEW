<!-- Hero -->
<section style="background-color: #B8860B;" class="relative h-72 flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('images/logo.jpeg')"></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            Law<span class="text-black">Firm</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Find Lawyer Agencies or post Contractor offer
        </p>
        <div>
            @auth
            <a href="/lawyers/create"
            class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">
             Post a Job offer!
            </a>
            @else
            <a href="/register"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign
                Up to Freelance
            </a>
            @endauth
        </div>
    </div>
</section>
