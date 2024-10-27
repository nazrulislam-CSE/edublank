@extends('layouts.admin.app', [$pageTitle => 'Page Title'])

@section('content')
    <!-- Content Header (Page header) -->
    <div class="breadcrumb-header justify-content-between">
        <div class="d-flex align-items-center">
            {{-- <h4 class="content-title mb-2">Hi, welcome back!</h4> --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Sections</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle ?? 'Page Title' }}</li>
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

    <!-- Main content -->
    <div class="card card-primary card-outline shadow-lg mb-4">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
            <p class="card-title my-0">{{ $pageTitle ?? 'Page Title' }}</p>
            <div class="d-flex">
                <a href="{{ route('admin.course.index') }}" class="btn btn-danger me-2">
                    <i class="fas fa-list d-inline"></i> Course List
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td> Name</td>
                        <td>{{ $course->name_en ?? 'NULL' }}</td>
                    </tr>
                    <tr>
                        <td> Title</td>
                        <td>{{ $course->title_en ?? 'NULL' }}</td>
                    </tr>
                    <tr>
                        <td> Category Name</td>
                        <td>{{ $course->category->name_en ?? 'NULL' }}</td>
                    </tr>
                    <tr>
                        <td> Instructor Name</td>
                        <td>{{ $course->instructor->name ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td> Description</td>
                        <td>{!! $course->description_en ?? 'NULL' !!}</td>
                    </tr>
                    <tr>
                        <td> Video</td>
                        <td>{{ $course->video_link ?? 'NULL' }}</td>
                    </tr>
                    <tr>
                        <td> Level</td>
                        <td>{{ $course->level ?? 'NULL' }}</td>
                    </tr>
                    <tr>
                        <td> Lessons</td>
                        <td>{{ $course->lessons ?? 'NULL' }}</td>
                    </tr>
                    <tr>
                        <td> Duration</td>
                        <td>{{ $course->duration ?? 'NULL' }}</td>
                    </tr>
                    <tr>
                        <td> Hours</td>
                        <td>{{ $course->hours ?? 'NULL' }}</td>
                    </tr>
                    <tr>
                        <td> Resources</td>
                        <td>{{ $course->resources ?? 'NULL' }}</td>
                    </tr>
                    <tr>
                        <td> Certificate</td>
                        <td>{{ $course->certificate ?? 'NULL' }}</td>
                    </tr>
                    <tr>
                        <td> Promo Code</td>
                        <td>{{ $course->promo_code ?? '0' }}</td>
                    </tr>
                    <tr>
                        <td> Regular Price</td>
                        <td>৳{{ $course->regular_price ?? '0' }}</td>
                    </tr>
                    <tr>
                        <td>Discount Price</td>
                        <td>
                            @if ($course->discount_price > 0)
                                @if ($course->discount_type == 1)
                                    <span class="badge bg-info text-white">৳{{ $course->discount_price }} off</span>
                                @elseif($course->discount_type == 2)
                                    <span class="badge bg-success text-white">{{ $course->discount_price }}% off</span>
                                @endif
                            @else
                                <span class="badge bg-danger text-white">No Discount</span>
                            @endif
                        </td>
                    </tr>
                    <tr>

                        <td> Photo</td>
                        <td>
                            <img src="{{ !empty($course->course_image) ? url('upload/course/' . $course->course_image) : url('upload/no_image.jpg') }}"
                                width="80" alt="image" class="img-fluid">
                        </td>
                    </tr>
                    </tr>
                    <td>Status</td>
                    <td>
                        @if ($course->status == 1)
                            <span class="badge bg-pill bg-success">Active</span>
                        @else
                            <span class="badge bg-pill bg-success">Disable</span>
                        @endif
                    </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
