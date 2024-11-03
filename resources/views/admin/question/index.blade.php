@extends('layouts.admin.app', [$pageTitle => 'Page Title'])

@section('content')
    @php
        $startTime = strtotime($exam->start_time);
        $endTime = strtotime($exam->end_time);
        $totalTime = ($endTime - $startTime) / 60; // Convert to minutes
        $hours = floor($totalTime / 60);
        $minutes = $totalTime % 60;

        function convertToBengaliNumber($number)
        {
            $bn_digits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
            $en_digits = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
            return str_replace($en_digits, $bn_digits, $number);
        }

    @endphp
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
                                style="font-size:17px;">{{ count($questions) }}</span> </p>

                        <div class="d-flex">
                            <a href="{{ route('admin.exam.index') }}" class="btn btn-success me-2">
                                <i class="fas fa-list d-inline"></i> Exam List
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <section class="content">
                            <div class="container-fluid">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="exam-details-container">
                                            <div class="exam-details-header text-center">
                                                <h4 class="text-uppercase text-dark"
                                                    style="font-size: 24px; font-weight: bold; margin-bottom: 10px;">
                                                    Batch: {{ $exam->batch->name_en ?? 'N/A' }}
                                                </h4>
                                                <h4 class="text-uppercase text-dark"
                                                    style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">
                                                    Exam Title: {{ $exam->title_en ?? 'N/A' }}
                                                </h4>
                                            </div>

                                            <div class="exam-details-body text-center">
                                                <h4 style="font-size: 18px; font-weight: bold; margin-bottom: 5px;">Subject
                                                    Name: {{ $exam->subject->name_en ?? 'N/A' }}</h4>
                                            </div>

                                            <div class="exam-details-body text-center">
                                                <h4 style="font-size: 18px; font-weight: bold; margin-bottom: 5px;">Topics:
                                                    {{ $exam->class_topic ?? 'N/A' }}
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="row text-center">
                                            <div class="col-md-4 col-sm-4">
                                                <div><b>Exam Date: {{ date('d-m-Y', strtotime($exam->start_time)) }}</b>
                                                </div>

                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div><b>Total Time: {{ $hours }} hours {{ $minutes }}
                                                        minutes</b></div>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <div><b>Full Marks:{{ $exam->total_mark }}</b></div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                @foreach ($questions as $key => $question)
                                                    <div class="mb-4">
                                                        <h5 class="question">
                                                            <h5 class="question">
                                                                <h5 class="question">({{ $key + 1 }}).
                                                                    {{ $question->question_text }}
                                                                    <div class="d-flex justify-content-end">
                                                                        <a href="{{ route('admin.question.edit', $question->id) }}"
                                                                            class="btn btn-primary btn-sm mr-2">
                                                                            <i class="fas fa-edit"></i>
                                                                        </a>

                                                                        <a href="{{ route('admin.question.delete', $question->id) }}"
                                                                            class="btn btn-danger btn-sm"
                                                                            title="Delete Data" id="delete">
                                                                            <i class="fa fa-trash"></i>
                                                                        </a>
                                                                    </div>


                                                                </h5>
                                                                <div class="row">
                                                                    @foreach ($question->answers as $answer)
                                                                        <div class="col-6">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="radio"
                                                                                    name="question_{{ $question->id }}"
                                                                                    id="answer_{{ $answer->id }}"
                                                                                    value="{{ $answer->id }}"
                                                                                    @if ($answer->is_correct) checked @endif>
                                                                                <label class="form-check-label"
                                                                                    for="answer_{{ $answer->id }}">
                                                                                    {{ $answer->answer_text }}
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection
