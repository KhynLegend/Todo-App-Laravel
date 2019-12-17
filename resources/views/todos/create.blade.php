@extends('layouts.app')

@section('content')

<div class="text-center my-5">

    <h1 class="h1">Create Todo</h1>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card card-default">

                <div class="card-header">Create Todo</div>

                <div class="card-body">

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="/store-todo">

                        @csrf

                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <textarea name="description" placeholder="Description" class="form-control" id="description" cols="30"
                                rows="10"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection