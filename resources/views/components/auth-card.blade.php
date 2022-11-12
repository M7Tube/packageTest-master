<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0  bg-gray-100">
    <div>
        <a href="/">
            <img src="{{ asset('images/Group 4784.png') }}" class="w-50 h-20 fill-current text-gray-500 mb-4" />
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6  px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
