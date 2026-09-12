<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('一覧表示') }}
            </h2>
            @if (session('message'))
                <div class="text-red-600 font-bold">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="mx-auto px-6">
          @foreach($posts as $post)
          <div class= "mt-6" p-6 bg-white rounded-2x1 shadow-md border border-gray-200">
            <p class="p-4 text-lg font-semibold">
              {{$post->title}}
            </p>
            <hr class="w-full">
            <P class="mt-4 p-4">
              {{$post->body}}
            </p>
            <div class="flex justify-end p-4 text-sm font-semibold">
              <p>
              {{$post->created_at}} / {{ $post->user->name??'匿名'}}
            </p>
          </div>
        </div>
        @endforeach
        </div>
         
    </form>

    </div>
</x-app-layout>
