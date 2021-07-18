@extends('layouts.master')

@section('title', 'All Category')

@section('content')

    <div class="container py-5">
        <div class="row">
            <div class="col-md-5">
                <h2>Add New Category</h2>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('categories.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="text">Description</label>
                        <textarea name="text" id="text" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="col-md-7 py-5">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('categories.show', $category->id) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger  btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection