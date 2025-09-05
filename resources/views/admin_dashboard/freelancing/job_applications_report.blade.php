@extends('admin_dashboard.master_layout')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">

            <h3>All Job Applications</h3>

            <!-- Filter Form -->
            <form method="GET" class="row g-3 mb-4">
                <div class="col-md-4">
                    <select name="job_id" class="form-select">
                        <option value="">-- Select Job --</option>
                        @foreach($jobs as $job)
                            <option value="{{ $job->id }}" {{ request('job_id') == $job->id ? 'selected' : '' }}>
                                {{ $job->title }} ({{ $job->company_name }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" name="company_name" class="form-control" placeholder="Company Name" value="{{ request('company_name') }}">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary" type="submit">Filter</button>
                    <a href="{{ route('freelancing.applications') }}" class="btn btn-secondary">Reset</a>
                </div>
            </form>

            <!-- Applications Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Job Title</th>
                            <th>Company</th>
                            <th>Applicant Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Highest Qualification</th>
                            <th>Resume</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($applications as $index => $application)
                            <tr>
                                <td>{{ $applications->firstItem() + $index }}</td>
                                <td>{{ $application->job->title ?? 'N/A' }}</td>
                                <td>{{ $application->job->company_name ?? 'N/A' }}</td>
                                <td>{{ $application->full_name }}</td>
                                <td>{{ $application->email }}</td>
                                <td>{{ $application->phone_number }}</td>
                                <td>{{ $application->highest_qualification }}</td>
                                <td>
                                    @if($application->resume_path)
                                        <a href="{{ asset('storage/' . $application->resume_path) }}" target="_blank">View Resume</a>
                                    @else
                                        N/A
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No applications found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $applications->withQueryString()->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
