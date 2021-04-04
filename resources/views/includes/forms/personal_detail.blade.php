<div class="row">
    {{-- <div class="col-md-12 mb-3">
        <small class="p-1 bg-light rounded"><i class="fas fa-info-circle text-primary"></i> Fields with <b>*</b> are required.</small>
    </div> --}}
    <div class="col-md-12 my-3"><h4 class="m-0 mb-1">Basic Information</h4><hr class="mt-0"></div>
    <div class="row">
        {{-- <div class="col-md-2 px-3">
            <img src="{{ $personal_details->profile_image_filename ?? '/image/cat-american.jpg' }}" class="img-fluid rounded">
            <div class="input-group mb-3 mt-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="profile_image_filename" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="profile_image_filename">Choose file</label>
                </div>
            </div>
        </div> --}}
        <div class="col-md-12 px-3">
            <div class="row">
                <div class="form-group col-md-3">
                    {{ Form::label('firstname', 'First Name*') }}
                    {{ Form::text('firstname', old('firstname'), ['class' => 'form-control'.($errors->has('firstname') ? ' is-invalid' : null), 'placeholder' => 'e.g. John', 'required', 'autofocus']) }}
                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group col-md-3">
                    {{ Form::label('middlename', 'Middle Name*') }}
                    {{ Form::text('middlename', old('middlename'), ['class' => 'form-control'.($errors->has('middlename') ? ' is-invalid' : null), 'placeholder' => 'e.g. White', 'required']) }}
                    @error('middlename')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group col-md-3">
                    {{ Form::label('lastname', 'Last Name*') }}
                    {{ Form::text('lastname', old('lastname'), ['class' => 'form-control'.($errors->has('lastname') ? ' is-invalid' : null), 'placeholder' => 'e.g. Doe', 'required']) }}
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group col">
                    {{ Form::label('suffixname', 'Suffix') }}
                    {{ Form::text('suffixname', old('suffixname'), ['class' => 'form-control'.($errors->has('suffixname') ? ' is-invalid' : null), 'placeholder' => 'e.g. Jr or II']) }}
                    @error('suffixname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group col">
                    {{ Form::label('middle_initial', 'Middle Initial') }}
                    {{ Form::text('middle_initial', old('middle_initial'), ['class' => 'form-control'. ($errors->has('middle_initial') ? ' is-invalid' : null), 'placeholder' => 'e.g. W']) }}
                    @error('middle_initial')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group col-md-3">
                    {{ Form::label('birth_date', 'Birth Date*') }}
                    {{ Form::date('birth_date', old('birth_date'), ['class' => 'form-control'.($errors->has('birth_date') ? ' is-invalid' : null), 'placeholder' => 'Select date...', 'required']) }}
                    @error('birth_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group col-md-2">
                    {{ Form::label('gender_id', 'Gender*') }}
                    {{ Form::select('gender_id', $genders, old('gender_id'), ['class' => 'form-control' . ($errors->has('gender_id') ? ' is-invalid' : null), 'placeholder' => 'Select...', 'required']) }}
                    @error('gender_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-2">
                    {{ Form::label('marital_status_id', 'Marital Status*') }}
                    {{ Form::select('marital_status_id', $marital_statuses, old('marital_status_id'), ['class' => 'form-control' . ($errors->has('marital_status_id') ? ' is-invalid' : null), 'placeholder' => 'Select...', 'required']) }}
                    @error('marital_status_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    

    <div class="col-md-12 my-3"><h4 class="m-0 mb-1">Contact</h4><hr class="mt-0"></div>
    <div class="form-group col-md-4">
        {{ Form::label('personal_email', 'Email Address*') }}
        {{ Form::email('personal_email', old('personal_email'), ['class' => 'form-control'. ($errors->has('personal_email') ? ' is-invalid' : null), 'placeholder' => 'e.g. email@domain.com']) }}
        @error('personal_email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-2">
        {{ Form::label('contact_no', 'Contact No.*') }}
        {{ Form::text('contact_no', old('contact_no'), ['class' => 'form-control'. ($errors->has('contact_no') ? ' is-invalid' : null), 'placeholder' => 'e.g. 09157894567']) }}
        @error('contact_no')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('address', 'Address*') }}
        {{ Form::text('address', old('address'), ['class' => 'form-control'. ($errors->has('address') ? ' is-invalid' : null), 'placeholder' => 'e.g. 123 Main Street, New York, NY 10030']) }}
        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('', 'Person to contact in-case of emergency') }}
        <div class="input-group mb-3 float-left">
            <div class="input-group-prepend">
                <span class="input-group-text">Name</span>
            </div>
            {{ Form::text('emerg_person', old('emerg_person'), ['class' => 'form-control'. ($errors->has('emerg_person') ? ' is-invalid' : null), 'placeholder' => 'e.g. John Doe Sr.']) }}
            @error('emerg_person')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="input-group-prepend">
                <span class="input-group-text">Contact</span>
            </div>
            {{ Form::text('emerg_contact_no', old('emerg_contact_no'), ['class' => 'form-control'. ($errors->has('emerg_contact_no') ? ' is-invalid' : null), 'placeholder' => 'e.g. 09876543210']) }}
            @error('emerg_contact_no')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-12 my-3"><h4 class="m-0 mb-1">Government Valid IDs</h4><hr class="mt-0"></div>
    <div class="form-group col-md-3">
        {{ Form::label('sss_no', 'SSS No.*') }}
        {{ Form::text('sss_no', old('sss_no'), ['class' => 'form-control'. ($errors->has('sss_no') ? ' is-invalid' : null), 'placeholder' => '10 Digit SSS ID no.', 'required', 'maxlength' => '10']) }}
        @error('sss_no')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('tin_no', 'TIN No.') }}
        {{ Form::text('tin_no', old('tin_no'), ['class' => 'form-control'. ($errors->has('tin_no') ? ' is-invalid' : null), 'placeholder' => 'Enter...']) }}
        @error('tin_no')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('philhealth_no', 'Philhealth No.') }}
        {{ Form::text('philhealth_no', old('philhealth_no'), ['class' => 'form-control'. ($errors->has('philhealth_no') ? ' is-invalid' : null), 'placeholder' => 'Enter...']) }}
        @error('philhealth_no')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('pagibig_no', 'Pag-Ibig No.') }}
        {{ Form::text('pagibig_no', old('pagibig_no'), ['class' => 'form-control'. ($errors->has('pagibig_no') ? ' is-invalid' : null), 'placeholder' => 'Enter...']) }}
        @error('pagibig_no')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


</div>