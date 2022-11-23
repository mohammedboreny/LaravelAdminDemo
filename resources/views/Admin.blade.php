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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Company
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fill Company Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="">
                                <div class="mb-3">
                                    <label for="floatingInput" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="floatingInput"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingInput">Email address</label>
                                    <input class="form-control" type="text" placeholder="Default input"
                                        id='floatingInput' aria-label="default input example">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingInput" class="form-label">Website</label>
                                    <input type="text" class="form-control" id="floatingInput">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Logo</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
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
