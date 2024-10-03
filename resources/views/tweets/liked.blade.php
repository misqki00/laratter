<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('いいねしたツイート一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="p-6">
                    @if ($likedTweets->isEmpty())
                    <p>いいねしたツイートはありません。</p>
                    @else
                    <ul>
                        @foreach ($likedTweets as $tweet)
                        <li class="mb-4 border-b border-gray-200 pb-4">
                            <p class="font-bold">{{ $tweet->user->name }}</p>
                            <p>{{ $tweet->tweet }}</p>
                            <p class="text-gray-600 text-sm">投稿日: {{ $tweet->created_at->diffForHumans() }}</p>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>