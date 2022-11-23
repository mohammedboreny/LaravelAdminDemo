@extends('Master')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-primary">

        <div class="container ">
            
                <h1 class="display-3 text-center">Patient Edit </h1>
                <p class="lead">
                </p>
            </div>
        </div>

        <div class="card w-50">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Go somewhere</a>
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>

                    <div class="container mt-5">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" width="1%">#</th>
                                    <th scope="col" width="15%">Name</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex">
                            {!! $users->links() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
  
    </div>
@endsection
