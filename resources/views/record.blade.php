@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as $key => $record)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $record['firstname'] }}</td>
                        <td>{{ $record['lastname'] }}</td>
                        <td>{{ $record['phone'] }}</td>
                        <td>
                            <form method="POST" action="{{ route('record.destroy', ['record' => $key]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <form method="POST" action="{{ route('record.store') }}">
                @csrf
                <div class="col-12 mb-2">
                    <label>Firstname</label>
                    <input type="text" name="firstname" class="form-control">
                </div>
                <div class="col-12 mb-2">
                    <label>Lastname</label>
                    <input type="text" name="lastname" class="form-control">
                </div>
                <div class="col-12 mb-2">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="col-12 mb-2">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
