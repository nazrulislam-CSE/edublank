@extends('layouts.admin.app', [$pageTitle => 'Page Title'])

@section('content')
 <!-- Content Header (Page header) -->
 <div class="breadcrumb-header justify-content-between">
    <div class="d-flex align-items-center">
        {{-- <h4 class="content-title mb-2">Hi, welcome back!</h4> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Question</a></li>
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
           <a href="{{ route('admin.question.index')}}" class="btn btn-danger me-2">
               <i class="fas fa-list d-inline"></i> Question List
           </a>
       </div>
   </div>
    <div class="card-body">
       <div class="table-responsive">
          <table class="table table-bordered">
             <tr>
                <td>Question Name English</td>
                <td>{{ $question->question_en ?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Question Name Bangla</td>
                <td>{{ $question->question_bn ?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Option A English</td>
                <td>{{ $question->optiona_en?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Option A Bangla</td>
                <td>{{ $question->optiona_bn?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Option B English</td>
                <td>{{ $question->optionb_en?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Option B Bangla</td>
                <td>{{ $question->optionb_bn?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Option C English</td>
                <td>{{ $question->optionc_en?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Option C Bangla</td>
                <td>{{ $question->optionc_bn?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Option D English</td>
                <td>{{ $question->optiond_en?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Option D Bangla</td>
                <td>{{ $question->optiond_bn?? 'NULL' }}</td>
             </tr>
            <tr>
            <td>Answer</td>
            <td>
                @if($question->answer == 'a')
                <a href="#" class="badge bg-pill bg-success">Option A Correct Answer</a>
            @elseif($question->answer == 'b')
                <a href="#" class="badge bg-pill bg-success">Option B Correct Answer</a>
            @elseif($question->answer == 'c')
                <a href="#" class="badge bg-pill bg-success">Option C Correct Answer</a>
            @elseif($question->answer == 'd')
                <a href="#" class="badge bg-pill bg-success">Option D Correct Answer</a>
            @else
                <a href="#" class="badge bg-pill bg-danger">No Correct Answer</a>
            @endif

            </td>
            </tr>
            <tr>
            <td>Types</td>
            <td>
                @if($question->types == '1')
                    <a href="#" class="badge bg-pill bg-success">Reading Quiz</a>
                @elseif($question->types == '2')
                    <a href="#" class="badge bg-pill bg-success">Vocabulary Quiz</a>
                @elseif($question->types == '3')
                    <a href="#" class="badge bg-pill bg-success">Chapter Quiz</a>
                @else
                   
                @endif

            </td>
            </tr>
            <tr>
                <td>Class Name English</td>
                <td>{{ $question->class->name_en?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Class Name Bangla</td>
                <td>{{ $question->class->name_bn?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Subject Name English</td>
                <td>{{ $question->subject->name_en?? 'NULL' }}</td>
             </tr>
             <tr>
                <td>Subject Name Bangla</td>
                <td>{{ $question->subject->name_bn?? 'NULL' }}</td>
             </tr>
             </tr>
             <td>Status</td>
             <td>
                   @if ($question->status == 1)
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
