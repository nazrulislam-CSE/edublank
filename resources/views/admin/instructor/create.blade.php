@extends('layouts.admin.app', [$pageTitle => 'Page Title'])

@section('content')
<div class="breadcrumb-header justify-content-between">
    <div class="d-flex align-items-center">
        {{-- <h4 class="content-title mb-2">Hi, welcome back!</h4> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle ?? 'Dashboard' }}</li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
            </ol>
        </nav>
    </div>
    <div class="d-flex my-auto">
        <div class=" d-flex right-page">
            <div class="d-flex justify-content-center me-5">
                <div class="">
                    <span class="d-block">
                        <span class="label ">EXPENSES</span>
                    </span>
                    <span class="value">
                        $53,000
                    </span>
                </div>
                <div class="ms-3 mt-2">
                    <span class="sparkline_bar"></span>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="">
                    <span class="d-block">
                        <span class="label">PROFIT</span>
                    </span>
                    <span class="value">
                        $34,000
                    </span>
                </div>
                <div class="ms-3 mt-2">
                    <span class="sparkline_bar31"></span>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="main-content-body">
        <div class="row row-sm">
            
    <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
            <p class="card-title my-0">{{ $pageTitle ?? 'Page Title'}}</p>
            <div class="d-flex">
                <a href="{{ route('admin.instructor.index')}}" class="btn btn-danger me-2">
                    <i class="fas fa-list d-inline"></i> Instructor List
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.instructor.store')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="row">
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="name"> Name: <span class="text-danger"></span></label>
                       @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Name">
                            <span class="input-group-text" title="Instructor Name" id="basic-addon1"><i class="fas fa-user"></i></span>
                            <input type="text" value="{{ old('name')}}" class=" form-control" name="name" placeholder="Instructor Name">
                        </div>
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="username"> Username: <span class="text-danger"></span></label>
                        @error('username') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Username">
                             <span class="input-group-text" title="Instructor Username" id="basic-addon1"><i class="fas fa-user"></i></span>
                             <input type="text" value="{{ old('username')}}" class=" form-control" name="username" placeholder="Instructor Username">
                         </div>
                     </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="email"> Email: <span class="text-danger"></span></label>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Email">
                             <span class="input-group-text" title="Instructor Email" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                             <input type="email" value="{{ old('email')}}" class=" form-control" name="email" placeholder="Instructor Email">
                         </div>
                     </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="phone"> Phone: <span class="text-danger"></span></label>
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Phone">
                             <span class="input-group-text" title="Instructor Phone" id="basic-addon1"><i class="fas fa-phone"></i></span>
                             <input type="number" min="0" value="{{ old('phone')}}" class=" form-control" name="phone" placeholder="Instructor Phone">
                         </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="present_address"> Address: <span class="text-danger"></span></label>
                        @error('present_address') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Address">
                             <span class="input-group-text" title="Instructor Address" id="basic-addon1"><i class="fas fa-user-shield"></i></span>
                             <input type="text" value="{{ old('present_address')}}" class=" form-control" name="present_address" placeholder="Instructor Address">
                         </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="designation">Designation : <span class="text-danger"></span></label>
                        @error('designation') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Designation">
                             <span class="input-group-text" title="Instructor Designation " id="basic-addon1"><i class="fas fa-user-shield"></i></span>
                             <input type="text" value="{{ old('designation')}}" class=" form-control" name="designation" placeholder="Instructor Designation">
                         </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="password">Password: <span class="text-danger"></span></label>
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Password">
                             <span class="input-group-text" title="Instructor Password" id="basic-addon1"><i class="fas fa-lock"></i></span>
                             <input type="password" value="{{ old('password')}}" class=" form-control" name="password" placeholder="Instructor Password">
                         </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="confirmation_password">Confirm Password: <span class="text-danger"></span></label>
                        @error('confirmation_password') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Confirm Password">
                             <span class="input-group-text" title="Instructor Confirm Password" id="basic-addon1"><i class="fas fa-lock"></i></span>
                             <input type="password" value="{{ old('confirmation_password')}}" class=" form-control" name="confirmation_password" placeholder="Instructor Confirm Password">
                         </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="facebook_url"> Facebook Link: <span class="text-danger"></span></label>
                        @error('facebook_url') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Facebook Link">
                             <span class="input-group-text" title="Instructor Facebook Link" id="basic-addon1"><i class="fab fa-facebook-square"></i></span>
                             <input type="text" class=" form-control" value="{{ old('facebook_url')}}" name="facebook_url" placeholder="Instructor Facebook Link">
                         </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="linkedin_url"> Linkedin Link: <span class="text-danger"></span></label>
                        @error('linkedin_url') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Linkedin Link">
                             <span class="input-group-text" title="Instructor Linkedin Link" id="basic-addon1"><i class="fab fa-linkedin"></i></span>
                             <input type="text"class=" form-control" value="{{ old('linkedin_url')}}" name="linkedin_url" placeholder="Instructor Linkedin Link">
                         </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="twitter_url"> Twitter Link: <span class="text-danger"></span></label>
                        @error('twitter_url') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Twitter Link">
                             <span class="input-group-text" title="Instructor Twitter Link" id="basic-addon1"><i class="fab fa-twitter"></i></span>
                             <input type="text" value="{{ old('twitter_url')}}" class=" form-control" name="twitter_url" placeholder="Instructor Twitter Link">
                         </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="instagram_url"> Instagram Link: <span class="text-danger"></span></label>
                        @error('instagram_url') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Instagram Link">
                             <span class="input-group-text" title="Instructor Instagram Link" id="basic-addon1"><i class="fab fa-instagram"></i></span>
                             <input type="text" value="{{ old('instagram_url')}}" class=" form-control" name="instagram_url" placeholder="Instructor Instagram Link">
                         </div>
                     </div>

                     <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="about">About: <span class="text-danger"></span></label>
                        @error('about') <span class="text-danger">{{ $message }}</span> @enderror
                         <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor About">
                             <span class="input-group-text" title="Instructor Instagram Link" id="basic-addon1"><i class="fas fa-eject"></i></span>
                             <textarea name="about" class="form-control" id="" cols="2" rows="2" placeholder="Instructor About here">{{ old('about')}}</textarea>
                         </div>
                     </div>
              
                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                       <label for="status">Status:</label>
                       @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Status">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-user-tie" title="Name"></i></span>
                            <select  name="status" class=" form-control">
                             <option value="">Select Status</option>
                                <option value="1"  {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0"  {{ old('status') == '0' ? 'selected' : '' }}>Deactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        <label for="photo">Photo:</label>
                        @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="input-group" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Instructor Photo">
                            <span class="input-group-text" title="Name" id="basic-addon1"><i class="fas fa-photo-video"></i></span>
                            <input type="file" name="photo" id="photo" class="form-control bg-white">
                        </div>
                    </div>

                    <div class="form-group col-xl-6 col-lg-6 col-md-6">
                        
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        <img id="showImage" src="{{ (!empty($profile->image)) ? url('upload/admin_images/'.$profile->image):url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
                    </div>
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                        <button type="submit" class="add-to-cart btn btn-success btn-block"><i class="fas fa-plus"></i> Add Instructor</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        </div>
    </div>
@endsection
@push('admin')
<!--profile photo  Show -->
<script type="text/javascript">
   $(document).ready(function(){
       $('#photo').change(function(e){
           var reader = new FileReader();
           reader.onload = function(e){
               $('#showImage').attr('src',e.target.result);
           }
           reader.readAsDataURL(e.target.files['0']);
       });
   });
</script>

@endpush
