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
        <!-- Row -->
        <div class="row row-sm">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <p class="card-title my-0">{{ $pageTitle ?? 'Page Title' }} <span class="badge bg-danger side-badge"
                                style="font-size:17px;">{{ count($exams) }}</span> </p>

                        <div class="d-flex">
                            <a href="{{ route('admin.exam.create') }}" class="btn btn-success me-2">
                                <i class="fas fa-list d-inline"></i> Add Now Exam
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="file-datatable"
                                class="border-top-0  table table-bordered text-nowrap key-buttons border-bottom">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">SL</th>
                                        <th class="border-bottom-0">Exam Title</th>
                                        <th class="border-bottom-0">Batch</th>
                                        <th class="border-bottom-0">Class</th>
                                        <th class="border-bottom-0">Subject</th>
                                        <th class="border-bottom-0">Topics</th>
                                        <th class="border-bottom-0">Status</th>
                                        <th class="border-bottom-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($exams as $key => $exam)
                                        <tr>
                                            <td class="col-1">{{ $key + 1 }}</td>
                                            <td>{{ $exam->title_en ?? 'Null' }}</td>
                                            <td>{{ $exam->batch->name_en ?? 'Null' }}</td>
                                            <td>{{ $exam->class->name_en ?? 'Null' }}</td>
                                            <td>{{ $exam->class->subject->name_en ?? 'Null' }}</td>
                                            <td>{{ $exam->class_topic ?? 'Null' }}</td>
                                            <td>
                                                @if ($exam->status == 1)
                                                    <a href="#" class="badge bg-pill bg-success">Active</a>
                                                @else
                                                    <a href="#" class="badge bg-pill bg-danger">Disable</a>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.question.index', $exam->id) }}"
                                                    class="btn btn-danger btn-sm mt-1">Total QS</a>
                                                <a href="{{ route('admin.questions.insert', $exam->id) }}"
                                                    class="btn btn-warning btn-sm mt-1" id="questionButton">Add QS</a>
                                                <a href="" class="btn btn-secondary btn-sm mt-1"
                                                    id="questionButton">Result</a>
                                                <a href="{{ route('admin.exam.edit', $exam->id) }}"
                                                    class="btn btn-primary btn-sm mr-2"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin.exam.delete', $exam->id) }}"
                                                    class="btn btn-danger btn-sm" title="Delete Data" id="delete"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
