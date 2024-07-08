@extends('layouts.default')

@section('title', 'Blog')

@section('content')
    <main class="max-w-4xl mx-auto text-midnight font-light">
        <div class="mx-auto px-6 sm:px-12 md:px-16">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-3xl font-bold tracking-tight text-indigo-900 sm:text-4xl">The Ray blog</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Shining a light on internals and updates.</p>
            </div>
            <div class="border-t border-gray-200 mt-10 sm:mt-16 divide-y divide-indigo-100 w-full">
                @forelse($posts as $post)
                    <a href="{{ route('post.show', $post->slug) }}" class="flex py-8 flex-col items-start justify-between">
                        <article>
                            @isset($post->date)
                            <div class="flex items-center gap-x-4 text-xxs">
                                <time datetime="{{ $post->date->format('Y-m-d') }}" class="text-gray-500">{{ $post->date->format('d F Y') }}</time>
                            </div>
                            @endisset
                            <div class="group relative">
                                <h3 class="mt-1 text-lg font-semibold leading-6 text-indigo-900 group-hover:text-indigo-600">
                                        <span class="absolute inset-0"></span>
                                        {{ $post->title }}
                                </h3>
                                <p class="mt-1 line-clamp-3 text-xs leading-6 text-indigo-900">{{ htmlspecialchars_decode(strip_tags($post->summary)) }}</p>
                            </div>
                            <div class="relative mt-2 flex items-center gap-x-6">
                                <?php /** @var \Spatie\ContentApi\Data\Author $author */ ?>
                                @foreach ($post->authors as $author)
                                    <div class="flex items-center gap-x-2">
                                        <img src="{{ $author->gravatar_url }}" alt="" class="h-6 w-6 rounded-full bg-indigo-50">
                                        <div class="text-[0.6rem] leading-6">
                                            <p class="font-semibold text-indigo-900">
                                                <span>
                                                    <span class="absolute inset-0"></span>
                                                    {{ $author->name }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </article>
                    </a>
                @empty
                    <article class="flex py-12 flex-col items-start justify-between">
                        <div class="group relative">
                            <h3 class="mt-1 text-lg font-semibold leading-6 text-indigo-900 group-hover:text-indigo-600">
                                The first post will be published soon...
                            </h3>
                        </div>
                    </article>
                @endforelse
            </div>
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>

        <x-cta />
    </main>
@endsection
