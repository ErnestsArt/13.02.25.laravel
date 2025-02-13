<x-app-layout>
    <h1>Create post</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content"></textarea>
        <br>
        <input type="submit" value="Create">
    </form>
</x-app-layout>
