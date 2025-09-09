@extends('admin_dashboard.master_layout')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Membership Plans</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                {{-- <li class="breadcrumb-item"><a href="#">Mifty</a></li> --}}
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Plans</li>
                            </ol>
                        </div>                                
                    </div>
                </div>
            </div>                   

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <h4 class="card-title">Add Membership Plan</h4>
                                </div>
                            </div>                                
                        </div>
                        <div class="card-body pt-0">
                            <form class="row g-3 needs-validation was-validated" 
                                method="POST" 
                                action="{{ route('plans.store') }}" 
                                novalidate
                                enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-6">
                                    <label class="form-label">Plan Name</label>
                                    <input type="text" 
                                        class="form-control @error('plantname') is-invalid @enderror" 
                                        name="plantname" 
                                        value="{{ old('plantname') }}" 
                                        required>
                                    @error('plantname')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Mode</label>
                                    <select class="form-control" name="mode" required>
                                        <option value="">Select Type</option>
                                        <option value="Monthly">Monthly</option>
                                        <option value="Annualy">Annualy</option>
                                    </select>
                                    @error('mode')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Amount</label>
                                    <input type="number" 
                                        class="form-control @error('amount') is-invalid @enderror" 
                                        name="amount"
                                        required>
                                    @error('amount')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Feature(s)</label>
                                    <div id="feature-list">
                                        @foreach(old('features', ['']) as $feature)
                                            <div class="d-flex mb-2">
                                                <input type="text" name="features[]" 
                                                    class="form-control @error('features.*') is-invalid @enderror" 
                                                    value="{{ $feature }}" required>
                                                <button type="button" class="btn btn-danger ms-2 remove">X</button>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" id="add-plan" class="btn btn-sm btn-secondary mt-2">+ Add More</button>
                                    @error('features.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                        name="description" required></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Add Plan</button>
                                </div>
                            </form>
                        </div> 
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('add-plan').onclick = () => {
    document.getElementById('feature-list').insertAdjacentHTML('beforeend', `
        <div class="d-flex mb-2">
            <input type="text" name="features[]" class="form-control" required>
            <button type="button" class="btn btn-danger ms-2 remove">X</button>
        </div>
    `);
};

document.getElementById('feature-list').addEventListener('click', e => {
    if(e.target.classList.contains('remove')) e.target.parentElement.remove();
});
</script>

@endsection
