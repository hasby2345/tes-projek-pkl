@extends('layouts.backend')
@section('content')
<h6 class="mb-0 text-uppercase">ACCES CONTROL LIST</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="col-lg-2">
            <a href="{{ route('user.create') }}" type="button" class="btn btn-outline-success px-4 d-flex gap-2">
                <i class="material-icons-outlined">account_circle</i>
                Add User
            </a>
        </div>
        <table class="table mb-0 table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Is Admin ?</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->is_admin ? 'Admin' : 'User' }}</td>
                    <td>
                        <a href="{{ route('user.show', $item->id) }}" type="button" class="btn btn-outline-primary gap-2"><i class="material-icons-outlined">search</i></a>
                        <a href="{{ route('user.edit', $item->id) }}" type="button" class="btn btn-outline-primary px-5">Edit</a>
                        <button type="button" class="btn btn-outline-danger px-5">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
