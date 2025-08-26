@extends('admin_dashboard.master_layout')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title">Jobs List</h4>
                            <a href="{{ route('freelancing.create') }}" class="btn btn-primary">
                                <i class="fa-solid fa-plus me-1"></i> Add Job
                            </a>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Company</th>
                                            <th>Location</th>
                                            <th>Pay</th>
                                            <th>Duration</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($jobs as $job)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $job->title }}</td>
                                                <td>{{ $job->company_name }}</td>
                                                <td>{{ $job->location }}</td>
                                                <td>{{ $job->pay }}</td>
                                                <td>{{ $job->duration }}</td>
                                                <td class="text-center">
                                                    {{-- Show --}}
                                                    <a href="{{ route('freelancing.show', $job->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fa-solid fa-eye fs-6"></i>
                                                    </a>

                                                    {{-- Edit --}}
                                                    <a href="{{ route('freelancing.edit', $job->id) }}" class="btn btn-sm btn-outline-secondary me-1">
                                                        <i class="fa-solid fa-pen-to-square fs-6"></i>
                                                    </a>

                                                    {{-- Delete --}}
                                                    <form action="{{ route('freelancing.destroy', $job->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this job?');">
                                                            <i class="fa-solid fa-trash fs-6"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">No jobs found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- Pagination (agar chahiye ho to) --}}
                        {{-- <div class="card-footer">
                            {{ $jobs->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
        });
    });
</script>
@endif

@endsection
