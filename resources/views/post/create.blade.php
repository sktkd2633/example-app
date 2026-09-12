<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('フォーム') }}
            </h2>
            @if (session('message'))
                <div class="text-red-600 font-bold">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </x-slot>
    <div class=" max-w-7xl mx-auto px-6 mt-8">
    <form method="post" action="{{ route('post.store') }}">
        @csrf
            <div class="w-full flex flex-col">
                <label for="title" class="font-semibold mt-4">件名</label>
                <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                <input type="text" name="title" class="w-auto p-2 border border-gray-300 rounded-md"
                    id="title">
            </div>

            <div class="w-full flex flex-col mt-4">
                <label for="body" class="font-semibold mt-4">本文</label>
                 <x-input-error :messages="$errors->get('body')" class="mt-2"/>
                <textarea name="body" class="w-auto p-2 border border-gray-300 rounded-md" id="body" cols="30"
                    rows="8"></textarea>
            </div>

            <button type="submit"
                class="w-full mt-4 cursor-pointer bg-blue-600 text-white  py-2 px-4 rounded hover:bg-gray-700"> 送信する
            </button>
    </form>

    </div>
</x-app-layout>
