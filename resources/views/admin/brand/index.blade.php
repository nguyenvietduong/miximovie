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
                                List Brands
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table mb-0 table-centered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Logo</th>
                                    <th>Country</th>
                                    <th>Total Products</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $brand)
                                <tr style="cursor: pointer;">
                                    <td class="text-primary fw-bold"><a href="{{ $brand->website }}" __black>{{ $brand->name }}</a></td>
                                    <td>{{ $brand->slug }}</td>
                                    <td>
                                        @if ($brand->logo)
                                        <img src="{{ checkFile($brand->logo) }}" alt="{{ $brand->name }}" width="auto" height="50">
                                        @else
                                        N/A
                                        @endif
                                    </td>
                                    <td>{{ $brand->country ?? 'N/A' }}</td>
                                    <td>{{ $brand->products->count() }}</td>
                                    <td>
                                        <div class="form-check form-switch form-switch-success">
                                            <input class="form-check-input toggle-active" type="checkbox" id="customSwitchSuccess{{ $brand->id }}" data-id="{{ $brand->id }}" {{ $brand->is_active ? 'checked' : '' }}>
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
                                    <td colspan="7" class="text-center text-muted">No brands found.</td>
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
