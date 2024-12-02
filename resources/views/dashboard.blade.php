@extends('layouts.app')

@section('content')

    @can('admin_access')
        @livewire('dashboards.admin-dashboard')
    @elsecan('seller_access')
        @livewire('dashboards.seller-dashboard')
    @else
        @livewire('dashboards.buyer-dashboard')
    @endcan
    
@endsection

@push('scripts')
    <!-- Apex chart -->
    <script src="../../libs/charts/apex/apexcharts.min.js"></script>

    <!-- Examples -->
    <script src="../../dist/js/examples/buyer-dashboard.js"></script>
    <script src="/dist/js/examples/dashboard.js"></script>
@endpush