@extends('layouts.admin')

@section('adminContent')
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4 class="card-title mb-0">
                                List Category
                            </h4>
                        </div>
                        {{-- <div class="col-md-6 text-end">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link {{ $roleId == 1 ? 'active' : '' }}" href="{{ route('admin.category', ['roleId' => 1]) }}">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $roleId == 2 ? 'active' : '' }}" href="{{ route('admin.category', ['roleId' => 2]) }}">Staff</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $roleId == 3 ? 'active' : '' }}" href="{{ route('admin.category', ['roleId' => 3]) }}">User</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table mb-0 table-centered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Parent</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $category)
                                <tr class="{{ !$category['is_active'] ? 'bg-warning' : '' }}">
                                    <td class="{{ is_null($category['parent_name']) ? 'text-primary fw-bold' : '' }}">{{ $category['name'] }}</td>
                                    <td>{{ $category['slug'] }}</td>
                                    <td>{{ $category['parent_name'] ?? '-----' }}</td>
                                    <td>
                                        <div class="form-check form-switch form-switch-success">
                                            <input class="form-check-input toggle-active" type="checkbox" id="customSwitchSuccess{{ $category['id'] }}" data-id="{{ $category['id'] }}" {{ $category['is_active'] ? 'checked' : '' }}>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown">
                                            <a class="text-muted fs-20" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="las la-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">{{ config('constants.messages.no_data') }}</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection