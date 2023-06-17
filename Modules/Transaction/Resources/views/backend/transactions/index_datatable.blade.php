@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ __($module_title) }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ __($module_title) }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <x-backend.section-header>
            <i class="{{ $module_icon }}"></i> {{ __($module_title) }} <small class="text-muted">{{ __($module_action) }}</small>

            <x-slot name="subtitle">
                @lang(":module_name Management Dashboard", ['module_name'=>Str::title($module_name)])
            </x-slot>
            <x-slot name="toolbar">
                @can('add_'.$module_name)
                <x-buttons.create route='{{ route("backend.$module_name.create") }}' title="{{__('Create')}} {{ ucwords(Str::singular($module_name)) }}" />
                @endcan

                @can('restore_'.$module_name)
                <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href='{{ route("backend.$module_name.trashed") }}'>
                                <i class="fas fa-eye-slash"></i> @lang("View trash")
                            </a>
                        </li>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->
                    </ul>
                </div>
                @endcan
            </x-slot>
        </x-backend.section-header>

        <div class="row mt-4">
            <div class="col">
                <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                               No Transaksi
                            </th>
                            <th>
                               Event
                            </th>
                            <th>
                               Package
                            </th>
                            <th>
                                Total Pembayaran
                            </th>
                            <th>
                                Metode Pembayaran
                            </th>
                            <th>
                                Status Pembayaran
                            </th>
                            <th>
                                User
                            </th>
                            <th>
                                Tanggal Transaksi
                            </th>
                            <th class="text-end">
                               Action
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">

                </div>
            </div>
            <div class="col-5">
                <div class="float-end">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push ('after-styles')
<!-- DataTables Core and Extensions -->
<link rel="stylesheet" href="{{ asset('vendor/datatable/datatables.min.css') }}">

@endpush

@push ('after-scripts')
<!-- DataTables Core and Extensions -->
<script type="module" src="{{ asset('vendor/datatable/datatables.min.js') }}"></script>

<script type="module">
    function renderRelatedData(data) {
        return data ?? 'N/A';
    }

    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: true,
        responsive: true,
        ajax: '{{ route("backend.$module_name.index_data") }}',
        columns: [
            {
                data: 'id',
                name: 'id'
            },
            {
                data: 'no_transaksi',
                name: 'no_transaksi',
                render: renderRelatedData
            },
            {
                data: 'mainevent.name',
                name: 'mainevent.name',
                render: renderRelatedData
            },
            {
                data: 'package.name',
                name: 'package.name',
                render: renderRelatedData
            },
            {
                data: 'no_transaksi',
                name: 'no_transaksi',
                render: renderRelatedData
            },
            {
                data: 'metode_pembayaran',
                name: 'metode_pembayaran',
                render: renderRelatedData
            },
            {
                data: 'status_pembayaran',
                name: 'status_pembayaran',
                render: renderRelatedData
            },
            {
                data: 'user.email',
                name: 'user.email',
                render: renderRelatedData
            },
            {
                data: 'tanggal_transaksi',
                name: 'tanggal_transaksi',
                render: renderRelatedData
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });
</script>

@endpush