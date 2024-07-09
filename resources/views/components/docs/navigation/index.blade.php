<nav class="docs-navigation text-midnightDark" x-data="{ navOpen: false }" x-on:livewire:navigated.window="navOpen = false">
    <button @click="navOpen = !navOpen"
            class="block lg:hidden w-full bg-white border-b px-5 py-4 text-left font-semibold text-base flex justify-between items-center">
        <span>Contents</span>

        <i class="fa fa-thin fa-angle-up" x-bind:class="! navOpen ? 'rotate-180' : ''"></i>
    </button>

    <div class="p-5 pb-0 lg:p-8 lg:pb-0">
        <button @click="showSearchBox = true"
                class="transition-border border hover:border-indigo-500 rounded p-3 w-full flex justify-between"
                :class="showSearchBox ? 'border-indigo-500' : 'nope'"
        >
            <div class="flex items-center">
                <x-icons.search />
                <span class="text-xs ml-2">Quick Search</span>
            </div>
            <span class="text-xs text-gray-400">⌘K</span>
        </button>
    </div>

    <ul class="bg-white p-5 lg:p-8 border-b lg:border-none" x-bind:class="! navOpen ? 'hidden lg:block' : ''">
        @foreach($navigation->categories as $key => $category)
            <li>
                <x-docs.navigation.category :category="$category" />
            </li>
        @endforeach
    </ul>
</nav>
