<div class="border-b border-gray-200 bg-white relative z-50" id="header">
    <header>
        <nav class="
            @if(isset($narrow) && $narrow)
            max-w-4xl
            @endif
            px-6 sm:px-12 md:px-16 py-8
            mx-auto
            flex items-center justify-between
        ">
            <div class="sm:flex items-center">
                <div>
                    <a class="block w-20" href="/">
                        <x-ray />
                    </a>
                    <span class="absolute top-full mt-1 left-0 text-indigo-800 text-opacity-50 font-normal text-px-xs">
                        By <a class="hover:underline" href="{{spatieUrl()}}">Spatie</a>
                    </span>
                </div>
            </div>

            <ul class="
            grid grid-flow-col gap-8
            font-semibold">
                <li><a class="markup-link" href="{{route('docs.index')}}">Docs</a></li>
                <li><a class="markup-link" href="{{ route('blog') }}">Blog</a></li>
                <li><a class="markup-link" href="{{spatieUrl('https://spatie.be/products/ray')}}">Buy</a></li>
                <li><a class="hover:text-indigo-500
                    transition-colors duration-300" title="GitHub" href="https://github.com/spatie/ray/"><i class="fab fab fa-github"></i></a></li>
            </ul>
        </nav>
    </header>
</div>
