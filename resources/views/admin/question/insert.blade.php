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
                    <p class="card-title my-0">{{ $pageTitle ?? 'Page Title' }} For <span
                            class="badge bg-success side-badge">
                            {{ $exam->id }}</span></p>
                    <div class="d-flex">
                        <a href="{{ route('admin.exam.index') }}" class="btn btn-danger me-2">
                            <i class="fas fa-list d-inline"></i> Exam List
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.question.store', $exam->id) }}" method="POST"
                        onsubmit="return validateForm()">
                        @csrf

                        <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                        <div class="form-group">
                            <label for="question_count" class="text-success">Number of Questions *:</label>
                            <input type="number" name="question_count" id="question_count"
                                class="form-control form-control-sm" min="1" required>
                        </div>
                        <div id="questions-container"></div> <!-- Container to hold dynamically generated questions -->
                        <div class="col-md-12 text-right">
                            <div class="form-group" id="generate-button">
                                <button type="button" onclick="generateQuestions()" class="btn btn-success">Generate
                                    Questions</button>
                            </div>
                            <div class="form-group" id="submit-button" style="display:none;">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript for form validation -->
    <script>
        function validateForm() {
            const questions = document.querySelectorAll('.question-group');
            for (let i = 0; i < questions.length; i++) {
                const radios = questions[i].querySelectorAll('input[type="radio"]');
                let radioChecked = false;
                for (let j = 0; j < radios.length; j++) {
                    if (radios[j].checked) {
                        radioChecked = true;
                        break;
                    }
                }
                if (!radioChecked) {
                    alert('অনুগ্রহ করে প্রতিটি প্রশ্নের জন্য একটি সঠিক উত্তর নির্বাচন করুন।');
                    return false;
                }
            }
            return true;
        }
    </script>
    <script>
        function generateQuestions() {
            const questionCount = document.getElementById('question_count').value;
            const container = document.getElementById('questions-container');
            container.innerHTML = ''; // Clear previous content

            for (let i = 0; i < questionCount; i++) {
                const questionNumber = i + 1;
                const questionDiv = document.createElement('div');
                questionDiv.classList.add('form-group', 'question-group');
                questionDiv.innerHTML = `
               <label for="question_text_${questionNumber}" class="text-success">Question ${questionNumber} *:</label>
               <input type="text" name="questions[${i}][question_text]" id="question_text_${questionNumber}" class="form-control form-control-sm" required>
               <br>
               <label for="answer" class="text-success">Give Options &amp; Tick Answer:</label>
               <div class="form-row mb-3">
                   <div class="col">
                       <div class="input-group">
                           <div class="input-group-prepend">
                               <span class="input-group-text">
                                   <input type="radio" name="questions[${i}][correct_answer]" value="0" required>
                               </span>
                           </div>
                           <div class="input-group-prepend">
                               <span class="input-group-text">A</span>
                           </div>
                           <input type="text" name="questions[${i}][answers][0]" class="form-control" required>
                       </div>
                   </div>
                   <div class="col">
                       <div class="input-group">
                           <div class="input-group-prepend">
                               <span class="input-group-text">
                                   <input type="radio" name="questions[${i}][correct_answer]" value="1" required>
                               </span>
                           </div>
                           <div class="input-group-prepend">
                               <span class="input-group-text">B</span>
                           </div>
                           <input type="text" name="questions[${i}][answers][1]" class="form-control" required>
                       </div>
                   </div>
               </div>
               <div class="form-row mb-3">
                   <div class="col">
                       <div class="input-group">
                           <div class="input-group-prepend">
                               <span class="input-group-text">
                                   <input type="radio" name="questions[${i}][correct_answer]" value="2" required>
                               </span>
                           </div>
                           <div class="input-group-prepend">
                               <span class="input-group-text">C</span>
                           </div>
                           <input type="text" name="questions[${i}][answers][2]" class="form-control" required>
                       </div>
                   </div>
                   <div class="col">
                       <div class="input-group">
                           <div class="input-group-prepend">
                               <span class="input-group-text">
                                   <input type="radio" name="questions[${i}][correct_answer]" value="3" required>
                               </span>
                           </div>
                           <div class="input-group-prepend">
                               <span class="input-group-text">D</span>
                           </div>
                           <input type="text" name="questions[${i}][answers][3]" class="form-control" required>
                       </div>
                   </div>
               </div>
           `;
                container.appendChild(questionDiv);
            }

            // Hide the number of questions field and the generate questions button
            document.getElementById('question_count').style.display = 'none';
            document.getElementById('generate-button').style.display = 'none';
            // Show the submit button
            document.getElementById('submit-button').style.display = 'block';
        }
    </script>
@endsection
