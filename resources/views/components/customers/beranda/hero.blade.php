<!-- Hero Section -->
<section class="relative">
    <!-- Background Image -->
    <img src="{{ asset('images/beranda/hero.jpg') }}" alt="Telepáti.Che" class="w-full h-[300px] sm:h-[400px] lg:h-[500px] object-cover">

    <!-- Overlay Content -->
    <div class="absolute inset-0 flex items-center justify-center">
        <div class="container px-6 mx-auto">
            <!-- Text Content -->
            <div class="max-w-lg p-6 bg-white bg-opacity-80 rounded-lg shadow-lg">
                <h1 class="mb-4 text-3xl font-bold text-gray-700 sm:text-4xl lg:text-5xl">
                    Telepáti.Che
                </h1>
                <p class="mb-6 text-base text-gray-600 sm:text-lg lg:text-xl">
                Clothing (Brand)
                </p>
                <!-- Button -->
                <a href="{{ route('products.index') }}" class="px-6 py-3 text-base font-semibold text-black transition duration-300 bg-black-500 rounded-lg shadow-md hover:bg-grey-600">
                    Shop Now
                </a>
            </div>
        </div>
    </div>
</section>
