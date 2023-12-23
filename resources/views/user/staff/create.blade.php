@extends('layouts.user.app', ['pageTitle' => $pageTitle])
@section('content')
    <div class="main-content-body">
        <form action="{{ route('user.staff.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Col -->
            <div class="card">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                    <p class="card-title my-0">{{ $pageTitle }}</p>
                    <div class="d-flex">
                        <a data-bs-target="#formSettingModal" data-bs-toggle="modal" class="btn btn-secondary text-white me-2">
                            <i class="fas fa-cog d-inline"></i>
                        </a>
                        <a href="javascript:;" onclick="comingSoon();" class="btn btn-secondary me-2">
                            <i class="fas fa-list d-inline"></i> {{ __('Supplier List') }}
                        </a>
                        <a href="javascript:;" onclick="comingSoon();" class="btn btn-secondary me-2">
                            <i class="fas fa-layer-group d-inline"></i> {{ __('Supplier Group') }}
                        </a>
                        <a href="javascript:;" onclick="comingSoon();" class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('dashboard/img/youtube.png') }}" alt="">
                        </a>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Name') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Username') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Username"><i class="fas fa-user-tie" title="Username"></i></span>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Userame">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Father Name') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Father Name"><i class="fas fa-user-tie" title="Father Name"></i></span>
                                <input type="text" class="form-control" name="fathers_name" placeholder="Father Name">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Mother Name') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Mother Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="mothers_name" placeholder="Mother Name">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Present Address') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Present Address"><i class="fas fa-user-tie" title="Present Address"></i></span>
                                <input type="text" class="form-control" name="present_address" placeholder="address">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Permenant Address') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Parmanent Address"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="parmanent_address" placeholder="parmanent address">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Birth Date') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Birth Date"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                <input class="form-control fc-datepicker" name="date_of_birth" placeholder="MM/DD/YYYY" type="text" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Nationality') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="nationality" placeholder="nationality">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Religion') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <select name="religion" class="form-control select2">
                                    <option label="Choose one">Please Select Religion</option>
                                    <option value="islam">Islam</option>
                                    <option value="hinduism">Hinduism</option>
                                    <option value="buddhism">Buddhism</option>
                                    <option value="christianity">Christianity</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Marital Status') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <select name="marital_status" class="form-control select2">
                                    <option label="Choose one">Please Select</option>
                                    <option value="married">Married</option>
                                    <option value="un_married">Un Married</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('NID') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="nid" placeholder="Nid">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Birth Certificate') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="birth_certificate" placeholder="Birth Certificate">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Blood Group') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <select name="blood_group" class="form-control select2" data-placeholder="Blood Group">
                                    <option value="">Blood Group</option>
                                    <option value="A+">(A+) A RhD positive</option>
                                    <option value="A-">(A-) A RhD negative</option>
                                    <option value="B+">(B+) B RhD positive</option>
                                    <option value="B-">(B-) B RhD negative</option>
                                    <option value="O+">(O+) O RhD positive</option>
                                    <option value="O-">(O-) O RhD negative</option>
                                    <option value="AB+">(AB+) AB RhD positive</option>
                                    <option value="AB-">(AB-) AB RhD negative</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Gender') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <select name="gender" class="form-control select2">
                                    <option label="Choose one">Select Gendar</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Edu. Qualification') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="edu_qualification" placeholder="Educational Qualification">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Experience') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="experience" placeholder="Experience">
                            </div>
                        </div>

                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Staff ID Number') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="staff_id" placeholder="Staff Id">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Image') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="file" name="image" class="form-control image" placeholder="" id="image">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Type') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="staff_type" placeholder="Staff Type">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Department') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <select name="department_id" class="form-control select2">
                                    <option value="1">Science</option>
                                    <option value="2">Arc</option>
                                    <option value="3">Commerce</option>
                                </select>
                                <a class="btn btn-success" type="button" href="javascript:;" data-bs-target="#staffDepartmentModal" data-bs-toggle="modal"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Designation') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <select name="designation_id" class="form-control select2">
                                    <option value="1">Student</option>
                                    <option value="2">Banker</option>
                                    <option value="3">Doctor</option>
                                </select>
                                <a class="btn btn-success" type="button" href="javascript:;" data-bs-target="#staffDesignationModal" data-bs-toggle="modal"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Office Zone') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <input type="text" class="form-control" name="office_zone" placeholder="Office Zone">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Joining Date') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                <input type="text" class="form-control fc-datepicker" name="joining_date" placeholder="MM/DD/YYYY" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Date of discharge') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                <input type="text" class="form-control fc-datepicker" name="discharge_date" placeholder="MM/DD/YYYY" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Email') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="email">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Phone') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                <input type="number" name="phone" min="0" class="form-control" placeholder="phone">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Machine ID') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                <input type="number" min="0" name="machine_id" class="form-control" placeholder="Machine Id">
                            </div>
                        </div>
                        <div class="form-group col-xl-4 col-lg-4 col-md-6">
                            <label for="" class="form-label">{{ __('Status') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="fas fa-user-tie" title="Name"></i></span>
                                <select name="status" class="form-control select2">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-xl-12 col-lg-12 col-md-12 col-12">
                            <label for="" class="form-label">{{ __('Description') }}</label>
                            <div class="input-group">
                                <span class="input-group-text" title="Name"><i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i></span>
                                <textarea name="description" class="form-control" id="" cols="5" rows="3" placeholder="Staff description in short"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 mt-3">
                            <button type="submit" class="add-to-cart btn btn-success btn-block">{{ __('Add Staff') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Col -->
        </form>
    </div>
    @include('user.staff.department-modal')
    @include('user.staff.designation-modal')
    @include('user.staff.form-setting-modal')
@endsection
