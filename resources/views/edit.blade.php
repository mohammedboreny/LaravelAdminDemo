@extends('Master')
@section('content')
    <a class="btn btn-danger" href="{{ url('admin') }}">back</a>
    <div class="container">
        <form method="POST" action="{{ url('admin/' . $companies->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="floatingInput" class="form-label">Name</label>
                <input type="text" name="name" value="{{ $companies->name }}" class="form-control" id="floatingInput"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="floatingInput">Email address</label>
                <input name="email" class="form-control" value="{{ $companies->email }}" type="text"
                    placeholder="Default input" id='floatingInput' aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="floatingInput" class="form-label">Website</label>
                <input type="text" name="website" value="{{ $companies->website }}" class="form-control"
                    id="floatingInput">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Logo</label>
                <input class="form-control" value="{{ $companies->img }}" type="file" name="logo" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary">edit</button>
        </form>
    </div>
    @if (Session::has('status'))
        <div class="alert alert-success text-center">
            {{ Session::get('status') }}
            @php
                Session::forget('status');
            @endphp
    @endif
    </div>
@endsection
