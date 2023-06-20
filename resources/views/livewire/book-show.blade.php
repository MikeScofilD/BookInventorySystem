<div class="flex flex-wrap">
    <div x-data="{ user: '{{ $user->name }}', isOpen: true }" class="w-full mb-4">
        <p x-text="'Привет, ' + user" class="text-lg font-bold text-center cursor-pointer"
            :class="{ 'text-blue-500': isOpen }" @click="isOpen = !isOpen"></p>

        <div x-show="isOpen" class="flex flex-wrap mt-4">
            @foreach ($books as $index => $book)
            <div class="w-1/4 px-4 py-4">
                <div class="bg-gray-200 w-150px h-250px">
                    @if ($book->hasMedia('default'))
                        @foreach ($book->getMedia('default') as $media)
                            <img src="{{ $media->getUrl() }}" alt="{{ $book->title }}" class="object-cover w-full h-full">
                        @endforeach
                    @endif
                </div>
                <div class="mt-2 text-xl font-semibold text-center cursor-pointer hover:text-blue-500">{{ $book->title
                    }}</div>
                <p class="text-sm text-gray-500">ISBN: {{ $book->isbn }}</p>
                <p class="text-sm text-gray-500">
                    Authors:
                    @foreach ($book->authors as $author)
                        <span class="cursor-pointer hover:text-blue-500">{{ $author->name }}</span>,
                    @endforeach
                </p>
                <p class="text-sm text-gray-500">
                    Publishers:
                    @foreach ($book->publishers as $publisher)
                        <span class="cursor-pointer hover:text-blue-500">{{ $publisher->name }}</span>,
                    @endforeach
                </p>
                <p class="text-sm text-gray-500">Publication Year: {{ $book->publication_year }}</p>
            </div>
            @endforeach
            <div class="flex justify-center w-full mt-4">
                {{ $books->links('livewire.pagination') }}
            </div>
        </div>

    </div>

</div>
