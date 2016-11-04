 @extends('layouts.master')

{{-- title of the page--}}

@section('title', 'Add a new book')

@section('content')
    <h1>Add a new book</h1>
    <form method='POST' action='/books'>

        {{ csrf_field() }}

        Title: <input type='text' name='title' value='{{ old("title") }}'>

      <!-- @if($errors->get('title'))
            <ul>
                @foreach($errors->get('title') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif  -->
        <input type='submit' value='Add new book'>

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>
@endsection
