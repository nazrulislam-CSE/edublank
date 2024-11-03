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
                    <p class="card-title my-0">{{ $pageTitle ?? 'Page Title' }}</p>
                    <div class="d-flex">
                        <a href="{{ url()->previous() }}" class="btn btn-danger me-2">
                            <i class="fas fa-list d-inline"></i> Question List
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.question.update', $question->id) }}" method="POST"
                        onsubmit="return validateForm()">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="question_text" class="col-form-label" style="font-weight: bold;">Question
                                    Text:<span class="text-danger">*</span></label>
                                <input type="text" id="question_text" name="question_text" class="form-control"
                                    value="{{ old('question_text', $question->question_text) }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="answers" class="text-success">Give Options &amp; Tick Answer:</label>
                            @foreach ($question->answers as $index => $answer)
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <input type="radio" name="correct_answer" value="{{ $index }}"
                                                        {{ $answer->is_correct ? 'checked' : '' }} required>
                                                </span>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">{{ chr(65 + $index) }}</span>
                                            </div>
                                            <input type="text" name="answers[{{ $index }}]" class="form-control"
                                                value="{{ old("answers.$index", $answer->answer_text) }}" required>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-12 text-left">
                            <div class="form-group">
                                <button id="submit-button" class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('admin')
    <script>
        /* ============== Summernote Added ============ */
        jQuery(function(e) {
            'use strict';
            $(document).ready(function() {
                $('#meta_description').summernote({
                    placeholder: 'Please some content here'
                });
            });
        });
        /* ============== Summernote Added ============ */
    </script>
@endpush
