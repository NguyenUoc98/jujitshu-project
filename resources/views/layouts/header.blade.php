<div class="absolute w-full z-20">
    <nav class="flex flex-wrap items-center justify-between py-2.5 px-3 mb-3 undefined false undefined">
        <div class="container max-w-7xl px-4 mx-auto flex flex-wrap items-center justify-between undefined">
            <div class="w-full flex justify-between lg:w-auto lg:static lg:block lg:justify-start undefined">
                <a href="{{ route('home') }}" target="_blank" rel="noreferrer">
                    <img class="h-8 w-auto sm:h-10 rounded-full" src="{{ asset('images/icon.jpeg') }}">
                </a>
                <button
                    class="cursor-pointer text-xl leading-none py-1 px-1.5 rounded-full border border-solid border-transparent bg-transparent block lg:hidden outline-none focus:outline-none hover:bg-white hover:bg-opacity-20 transition-all duration-300"
                    type="button"><span class="block relative w-6 h-px rounded-sm bg-white"></span><span
                        class="block relative w-6 h-px rounded-sm bg-white mt-1"></span><span
                        class="block relative w-6 h-px rounded-sm bg-white mt-1"></span></button>
            </div>
            <div class="lg:flex flex-grow items-center hidden undefined">
                <ul class="flex lg:items-center flex-col lg:flex-row list-none mr-auto undefined">
                    <div class="hidden space-x-8 md:flex items-center md:ml-10">
                        <a href="#" class="text-base font-medium text-white hover:text-gray-300">Trang chủ</a>
                        <a href="#" class="text-base font-medium text-white hover:text-gray-300">Tin tức</a>
                        <a href="#" class="text-base font-medium text-white hover:text-gray-300">Giỏ hàng</a>
                        <a href="#" class="text-base font-medium text-white hover:text-gray-300">Về chúng tôi</a>
                    </div>
                </ul>
                <ul class="ml-auto">
                    <button
                        class="false flex items-center justify-center gap-1 font-bold outline-none uppercase tracking-wider focus:outline-none focus:shadow-none transition-all duration-300 rounded-lg py-2.5 px-6 text-xs leading-normal text-white       bg-white text-black ml-4">
                        Đăng nhập
                    </button>
                </ul>
            </div>
        </div>
    </nav>
</div>
