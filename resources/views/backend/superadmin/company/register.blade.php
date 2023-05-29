<!-- Home-> register company for frontend page -->
Please Enter data for new Company <br>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif 

    
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
     
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
     
@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    
@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Please check the form below for errors</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<main id="main">

    <!-- ======= Register Section ======= -->
    <section id="register" class="contact mt-5">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Company Sign up</h2>

            </div>
            <div class="row">

                <div class="login-box">

                    <!-- /.login-logo -->
                    <div class="card">
                        <div class="card-body login-card-body">
                            <form method="POST" action="{{ route('superadmin.store.company') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <select class="form-control @error('account_created_by') is-invalid @enderror" id="account_created_by" name="account_created_by" required autofocus>
                                                <option value="">Select Owner Type</option>
                                                <option value="1" {{ old('account_created_by') == 1 ? 'selected' : ''}}>OWNER</option>
                                                <option value="2" {{ old('account_created_by') == 2 ? 'selected' : ''}}>HR</option>
                                            </select>
                                            @error('account_created_by')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Your Name" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                        <div class="input-group mb-3">
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Title" required autocomplete="title" autofocus>
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name" required autocomplete="company_name" autofocus>
                                            @error('company_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="input-group mb-3">
                                            <select class="form-control @error('industry_type') is-invalid @enderror" id="industry_type" name="industry_type" required >
                                                <option value="" >Select Industry Type</option>
                                                <option value="1" {{ old('industry_type') == 1 ? 'selected' : ''}}>Service</option>
                                                <option value="2" {{ old('industry_type') == 2 ? 'selected' : ''}}>Product</option>
                                            </select>
                                            @error('industry_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group mb-3">
                                            <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" placeholder="Contact No" required autocomplete="contact" autofocus>
                                            @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <textarea id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Address" required autocomplete="address" autofocus>{{ old('address') }}</textarea>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="col-md-3">

                                        <div class="input-group mb-3">
                                            <select class="form-control @error('identity_type') is-invalid @enderror" id="identity_type" name="identity_type" required>
                                                <option value="">Select Identity Type</option>
                                                <option value="1" {{ old('identity_type') == 1 ? 'selected' : ''}}>PAN</option>
                                                <option value="2" {{ old('identity_type') == 2 ? 'selected' : ''}}>GST</option>
                                                <option value="3" {{ old('identity_type') == 3 ? 'selected' : ''}}>Both</option>
                                            </select>
                                            @error('identity_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <div class="input-group mb-3" id="pan_div">
                                            <input id="pan" type="text" class="form-control @error('pan') is-invalid @enderror" name="pan" value="{{ old('pan') }}" placeholder="PAN" autocomplete="pan" autofocus>
                                            @error('pan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                       
                                    <div class="col-md-4">
                                        <div class="input-group mb-3" id="gst_div">
                                            <input id="gst" type="text" class="form-control @error('gst') is-invalid @enderror" name="gst" value="{{ old('gst') }}" placeholder="GST" autocomplete="gst" autofocus>
                                            @error('gst')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-8">
                                          
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">Create</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                        </div>
                        </form>

                       
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>

        </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main>

