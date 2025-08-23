@extends('layouts.admin')

@section('adminContent')
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title mb-0">Product List</h4>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table mb-0 table-centered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Category</th>
                                    <th>Variants</th>
                                    <th>Favorites</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $product)
                                <tr>
                                    <td class="fw-bold text-primary text-truncate" style="max-width: 200px;" title="{{ $product->name }}">
                                        {{ $product->name }}
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                <img src="{{ checkFile($product->brand->logo) }}" alt="{{ $product->brand->name }}" height="50" width="50" class="border rounded-circle">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end p-3" style="min-width: 280px;">
                                                @if ($product->brand)
                                                <table class="table table-sm table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" class="text-nowrap">Name:</th>
                                                            <td>{{ $product->brand->name ?? 'N/A' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="text-nowrap">Slug:</th>
                                                            <td>{{ $product->brand->slug ?? 'N/A' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="text-nowrap">Description:</th>
                                                            <td>{{ $product->brand->description ?? 'N/A' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="text-nowrap">Website:</th>
                                                            <td>
                                                                <a href="{{ $product->brand->website ?? '#' }}" target="_blank">
                                                                    {{ $product->brand->website ?? 'N/A' }}
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="text-nowrap">Country:</th>
                                                            <td>{{ $product->brand->country ?? 'N/A' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="text-nowrap">Active:</th>
                                                            <td>
                                                                <div class="form-check form-switch form-switch-success d-inline-block">
                                                                    <input class="form-check-input" type="checkbox" disabled {{ $product->brand->is_active ? 'checked' : '' }}>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @else
                                                <div class="text-muted">N/A</div>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $product->category?->full_name ?? 'N/A' }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown">
                                                {{ $product->variantCombinations->count() }} ✔
                                            </a>
                                            <div class="dropdown-menu p-2" style="min-width: 520px; max-height: 300px; overflow-y: auto;">
                                                @if($product->variantCombinations->count())
                                                <table id="variantTable-{{ $product->id }}" class="table table-bordered mb-0 table-sm">
                                                    <thead style="position: sticky; top: 0; z-index: 1; background: #fff;">
                                                        <tr>
                                                            <th>Variant</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($product->variantCombinations as $combination)
                                                        @php
                                                        $optionText = $combination->variantOptions->pluck('value')->join(' / ');
                                                        @endphp
                                                        <tr>
                                                            <td>{{ $optionText }}</td>
                                                            <td>{{ $combination->quantity }}</td>
                                                            <td>{{ number_format($combination->price, 0, ',', '.') }}₫</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                @else
                                                <div class="text-center text-muted">No data available.</div>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $product->favoritedByUsers->count() }}</td>
                                    <td>
                                        <div class="form-check form-switch form-switch-success">
                                            <input class="form-check-input toggle-active" type="checkbox" id="customSwitchSuccess{{ $product['id'] }}" data-id="{{ $product['id'] }}" {{ $product['is_active'] ? 'checked' : '' }}>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown">
                                            <a href="#" class="text-muted fs-20" data-bs-toggle="dropdown">
                                                <i class="las la-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="">Edit</a></li>
                                                <li>
                                                    <form method="POST" action="">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">No data available.</td>
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

@push('script')
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        @foreach($datas as $product)
        $('#variantTable-{{ $product->id }}').DataTable({
            paging: true,
            searching: true,
            info: false,
            lengthChange: false,
            language: {
                search: "Search: ",
                paginate: {
                    previous: "Previous",
                    next: "Next"
                },
                zeroRecords: 'No matching records found.',
                emptyTable: "No data available."
            }
        });
        @endforeach
    });
</script>
@endpush
