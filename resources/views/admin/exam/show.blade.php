@extends('layouts.admin.app', [$pageTitle => 'Page Title'])

@section('content')
 <!-- Content Header (Page header) -->
 <div class="breadcrumb-header justify-content-between">
    <div class="d-flex align-items-center">
        {{-- <h4 class="content-title mb-2">Hi, welcome back!</h4> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $pageTitle ?? 'Dashboard' }}</a></li>
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
       <p class="card-title my-0">{{ $pageTitle ?? 'Page Title'}}</p>
       <div class="d-flex">
           <a href="{{ route('admin.exam.index')}}" class="btn btn-danger me-2">
               <i class="fas fa-list d-inline"></i> Exam List
           </a>
       </div>
   </div>
    <div class="card-body">
        <h4>Class: <span class="text-success font-weight-bolder">{{ $exam->class->name_en ?? 'Null'}}</span></h4>
        <h4>Subject Name: <span class="text-success font-weight-bolder">{{ $exam->class->subject->name_en ?? 'Null'}}</span></h4>
        <h4 class="text-uppercase text-center my-3 text-info">Exam Title: {{$exam->title_en}}</h4>
        <div class="row">
          <div class="col-md-4 col-sm-4">
              <div class="text-center"><b>Exam Date: {{$exam->date}}</b></div>
          </div>
          <div class="col-md-4 col-sm-4">
              <div class="text-center"><b>Total Time: {{$exam->totaltime}} minutes</b></div>
          </div>
          <div class="col-md-4 col-sm-4">
              <div class="text-center"><b>Full Marks: {{$exam->marks}}</b></div>
          </div>
        </div><hr>
        <div class="row">
            <div class="col-md-6 col-lg-12 col-sm-4">
                @foreach($exam->questions as $key=> $question)
                    <div class="row text-center">
                        <div class="col-lg-5 col-sm-12">
                            <lebel for="question" class="">
                                <span class="">{{$key+1}}. {{$question->question_en ?? 'Null'}}</span>
                            </lebel>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-6 mt-2 text-center">
                            <label class="custom-control form-radio">
                                <input type="radio" class="custom-control-input" name="q{{ $question->id }}" value="A" {{ $question->answer == 'a' ? 'checked' : '' }}>
                                <span class="custom-control-label">A. {{ $question->optiona_en ?? 'Null' }}</span>
                            </label>
                        </div>
                        
                        <div class="col-6 mt-2 text-center">
                            <label class="custom-control form-radio">
                                <input type="radio" class="custom-control-input" name="q{{$question->id}}" value="B" {{ $question->answer == 'b' ? 'checked' : '' }}>
                                <span class="custom-control-label"> B. {{$question->optionb_en ?? 'Null'}}</span>
                            </label>
                        </div>
                        <div class="col-6 mt-2 text-center">
                            <label class="custom-control form-radio">
                                <input type="radio" class="custom-control-input" name="q{{$question->id}}" value="C" {{ $question->answer == 'c' ? 'checked' : '' }}>
                                <span class="custom-control-label"> C. {{$question->optionc_en ?? 'Null'}}</span>
                            </label>
                        </div>
                        <div class="col-6 mt-2 text-center">
                            <label class="custom-control form-radio">
                                <input type="radio" class="custom-control-input" name="q{{$question->id}}" value="D" {{ $question->answer == 'd' ? 'checked' : '' }}>
                                <span class="custom-control-label"> D. {{$question->optiond_en ?? 'Null'}}</span>
                            </label>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-4 col-sm-12">
                                <lebel for="question" class="">
                                    <span class="text-danger font-weight-bolder">Answer: {{ $question->answer ?? 'Null' }}</span>
                                </lebel>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
            </div>
        </div>
    </div>
 </div>
@endsection
