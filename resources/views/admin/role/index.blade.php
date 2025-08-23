@extends('layouts.admin')

@section('adminContent')
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="card-title mb-0">
                                List Role
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-2">
                    <div class="table-responsive">
                        <table class="table mb-0 table-centered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->title }}</td>
                                    <td>{{ $role->description }}</td>
                                    <td>{{ $role->created_at }}</td>
                                    <td>{{ $role->updated_at }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">No accounts found for this role.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection