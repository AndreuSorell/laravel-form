<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            padding-left: 40px;
        }

        .regular-input {
            border: 1px solid black;
            width: 20%;
        }

        .alert {
            color: red;
        }

        .regular-fieldset {
            border: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    @include('components.navbar')
    <h1>{{ __('posts') }}</h1>
    <form id="postform" method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf

        <!-- TITLE -->
        <label>{{ __('messages.post_title') }}</label><br>
        <input id="title" type="text" name="title" value="{{ $post->title }}"
            class="@error('title') is-invalid @enderror regular-input"
            placeholder='{{ __('messages.post_title_placeholder') }}'>
        @error('title')
            <div class="alert">{{ $message }}</div>
        @enderror
        <br>

        <!-- EXTRACT -->
        <label>{{ __('messages.post_extract') }}</label><br>
        <input id="extract" type="text" name="extract" value="{{ $post->extract }}" class="regular-input"
            placeholder='{{ __('messages.post_extract_placeholder') }}'><br><br>

        <!-- CHECKS -->
        <fieldset class="regular-fieldset">
            <label for="expirable">{{ __('caducable') }}</label>
            <input type="checkbox" id="expirable" name="expirable" @checked(old('expirable', $post->expirable))>
            <label for="comentable">{{ __('comentable') }}</label>
            <input type="checkbox" id="comentable" name="comentable" @checked(old('comentable', $post->comentable))><br>
        </fieldset>

        <br>

        <!-- RADIOS -->
        <fieldset class="regular-fieldset">
            <label for="private_access">{{ __('messages.private_access') }}</label>
            <input type="radio" id="private_access" name="access" value="private" @checked(old('private_access', $post->is_private))>
            <label for="public_access">{{ __('messages.public_access') }}</label>
            <input type="radio" id="public_access" name="access" value="public" @checked(old('public_access', !$post->is_private))>
        </fieldset>
        <br>

        <!-- CONTENT -->
        <label>{{ __('messages.post_content') }}</label><br>
        <textarea cols="50" rows="5" class="@error('content') is-invalid @enderror regular-input" id="content"
            name="content" form="postform" placeholder='{{ __('messages.post_content_placeholder') }}'>{{ $post->content }}</textarea>
        @error('content')
            <div class="alert">{{ $message }}</div>
        @enderror
        <br><br>

        <button type="submit">{{ __('messages.submit') }}</button>
        @csrf @method('PUT')
    </form>
    
</body>

</html>
