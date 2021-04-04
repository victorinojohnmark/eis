@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <p class="pt-2 m-0 float-left"><i class="fas fa-info-circle text-primary"></i> Fields with <b>*</b> are required.</p></h3> 
            <a href="{{ route('personal_details.index') }}" class="btn btn-success float-right"><i class="fas fa-users"></i> Personal Details List</a>
        </div>
        <div class="card-body">
              
            @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach

            @endif

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab">Details</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="image-tab" data-toggle="tab" href="#image" role="tab">Images</a>
                </li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane fade show active" id="details" role="tabpanel">
                    {{ Form::model($personalDetail,['url' => route('personal_details.update', $personalDetail->id), 'method' => 'POST', 'files' => 'true']) }}
                    @include('includes.forms.personal_detail')
                    <div class="mt-3">
                        <button type="reset" class="btn btn-danger"><i class="fas fa-recycle"></i> Reset</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                    </div>
                </div>

                <div class="tab-pane fade" id="image" role="tabpanel">
                    <div class="row mt-3">
                        <div class="col-md-2">
                            <div class="card">
                                <img src="{{ $personal_details->profile_image_filename ?? '/image/cat-american.jpg' }}" id="profileImage" class="img-fluid"  style="max-height: 250px;">
                                <div class="card-body">
                                    <p>Profile Image</p>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="profile_image_filename" accept="image/png, image/jpeg">
                                            <label class="custom-file-label" for="profile_image_filename">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="modal fade" id="modalProfileImageCropper" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="modalLabel">Crop Image</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="img-container">
                                      <div class="row">
                                          <div class="col-md-8">
                                              <img id="profileModalImage" src="https://avatars0.githubusercontent.com/u/3456749">
                                          </div>
                                          <div class="col-md-4">
                                              <div id="profileImagePreview" class="crop-preview border"></div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <button type="button" class="btn btn-primary" id="crop">Crop</button>
                                </div>
                              </div>
                            </div>
                          </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ $personal_details->signature_image_filename ?? '/image/signature.png' }}" id="signatureImage" class="img-fluid" style="max-height: 250px;">
                                <div class="card-body d-flex flex-column h-100">
                                    <p>Signature</p>
                                    <div class="mt-auto input-group mb-3 mt-auto">
                                            <input type="file" class="mt-auto custom-file-input" id="profile_image_filename" aria-describedby="inputGroupFileAddon01">
                                            <label class="mt-auto custom-file-label" for="profile_image_filename">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>


@endsection