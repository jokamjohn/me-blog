<div class="flex flex-col mb-4">
    <p class="text-grey-dark font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="text-3xl mt-0">
        <a href="{{ $page->url($post->getPath()) }}"
            title="Read more - {{ $post->title }}"
            class="text-black font-extrabold">
            {{ $post->title }}
        </a>
    </h2>

    <p class="mt-0 mb-4 font-light">{!! $post->excerpt() !!}</p>

    <a href="{{ $page->url($post->getPath()) }}"
        title="Read more - {{ $post->title }}"
        class="mb-4 text-blue uppercase font-semibold tracking-wide">
        Read
    </a>
</div>