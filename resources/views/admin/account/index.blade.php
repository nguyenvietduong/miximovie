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
                                List Account
                            </h4>
                        </div>
                        <div class="col-md-6 text-end">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link {{ $roleId == 1 ? 'active' : '' }}" href="{{ route('admin.account', ['roleId' => 1]) }}">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $roleId == 2 ? 'active' : '' }}" href="{{ route('admin.account', ['roleId' => 2]) }}">Staff</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $roleId == 3 ? 'active' : '' }}" href="{{ route('admin.account', ['roleId' => 3]) }}">User</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table mb-0 table-centered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Birthday</th>
                                    <th>Address</th>
                                    <th>Last Login</th>
                                    @if(Auth::user()->role_id != 3 && (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) && ($roleId == 2 || $roleId == 3))
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $account)
                                <tr class="{{ $account->deleted_at ? 'bg-danger text-white' : (!$account->is_active ? 'bg-warning' : '') }}">

                                    <td>
                                        <img src="{{ checkFile($account->avatar) }}" alt="" class="rounded-circle thumb-md me-2 d-inline">
                                        {{ $account->name }}
                                    </td>
                                    <td>{{ $account->masked_email }}</td>
                                    <td>{{ $account->masked_phone }}</td>
                                    <td>
                                        @switch($account->gender)
                                        @case('male')
                                        <span class="badge bg-info text-dark">Male</span>
                                        @break

                                        @case('female')
                                        <span class="badge bg-warning text-dark">Female</span>
                                        @break

                                        @case('other')
                                        <span class="badge bg-primary">Other</span>
                                        @break

                                        @default
                                        <span class="badge bg-secondary">Unknown</span>
                                        @endswitch
                                    </td>
                                    <td>{{ $account->birthday ? $account->birthday->format('d/m/Y') : '-' }}</td>
                                    <td>{{ $account->masked_address }}</td>
                                    <td>{{ $account->last_login_at ? $account->last_login_at->format('d/m/Y H:i') : '-' }}</td>

                                    @if(Auth::user()->role_id != 3 && (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) && ($roleId == 2 || $roleId == 3))
                                    <td>
                                        <div class="form-check form-switch form-switch-success">
                                            <input class="form-check-input toggle-active" type="checkbox" id="customSwitchSuccess{{ $account->id }}" data-id="{{ $account->id }}" {{ $account->is_active ? 'checked' : '' }}>
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
                                    @endif
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted">No accounts found for this role.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="mt-3">
                            {{ $datas->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                    </div> <!-- end table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    let urlUpdateStatusAccount = "{{ route('admin.account.updateStatus') }}";

</script>
<script src="{{ asset(config('app.asset_admin_path') . '/js/custom/account/update-status-account.js') }}"></script>
@endpush
