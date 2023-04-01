@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <ul style="list-style-type: none; padding: 0;">
                        @foreach($newsArticles as $article)
                            <li class="mb-4" style="color: white; background-color: #333; padding: 10px; border-radius: 5px;">
                                <h2>{{ $article['title'] }}</h2>
                                <p>{{ $article['date'] }}</p>
                                <a href="{{ $article['link'] }}" target="_blank" style="color: #1abc9c;">{{ __('Read More') }}</a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @foreach($newsArticles as $article)
                            <div class="mb-4">
                                <h2>{{ $article['title'] }}</h2> -->
                                <!-- <p>{{ $article['date'] }}</p> 日付を表示 -->
                                <!-- <a href="{{ $article['link'] }}" target="_blank">{{ __('Read More') }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection -->


<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> -->
