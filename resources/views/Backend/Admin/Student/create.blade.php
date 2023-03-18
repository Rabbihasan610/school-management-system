@extends('Backend.Admin.master')

@section('title')
    Add Student
@endsection


@php
    $general_info = \App\Models\GeneralSettings::find(1);
@endphp


@section('css')
    <style>
        .card{
            padding:20px;
        }

        .form .form-label{
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }

        .form .form-control{
            font-size: 16px;
            padding: 20px;
            color: #000;
        }

        .form .form-select{
            font-size: 16px;
            padding: 10px;
            width: 100%;

        }
        input[type="file"]{
            padding: 5px 0px 33px 7px !important;
        }
    </style>
@endsection
@section('content')
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>@yield('title')</h3>
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li>@yield('title')</li>
        </ul>
    </div>

    <!-- Breadcubs Area End Here -->
    <div class="card">
        <div class="card-body">

            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Give Your Full Information Bellow</h3>
                </div>
                <div class="dropdown">

                    <a href="" class="btn-fill-sm btn-gradient-yellow btn-hover-bluedark"><i
                            class="fa fa-eye mr-2 text-white"></i><span class="text-white">Student List</span></a>

                </div>
            </div>

            <form class="form  g-3 needs-validation" novalidate action="{{route('admin.student.save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <h3 class="my-4">Genarel Information:</h3>
                    <div class="card shadow my-3">
                       <div class="row mx-2">
                        <div class="col-12 col-lg-12 col-xl-12 mb-3">
                            <label for="validationCustom01" class="form-label">Student Name <span class="text-danger">*</span></label>
                            <input type="text" name="student_name" class="form-control" id="validationCustom01" value=""
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide your name.
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-12 mb-3">
                            <label for="validationCustom02" class="form-label">শিক্ষার্থীর নাম বাংলায়  <span class="text-danger">*</span></label>
                            <input type="text" name="student_name_bn" class="form-control " id="validationCustom02" value="Otto"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide your bangla name.
                            </div>

                        </div>
                       </div>

                        <div class="row mx-2">
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="birth_certificate_number" class="form-label">Birth Certificate Number <span class="text-danger">*</span></label>
                                <input type="text" name="birth_certificate_number" class="form-control" id="birth_certificate_number" required>
                                <div class="invalid-feedback">
                                    Please provide a valid birth certificate number.
                                </div>
                                <div class="valid-feedback">
                                    Looks Good!
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="dob" class="form-label">Date Of Birth <span class="text-danger">*</span> </label>
                                <input type="text" name="dob" class="form-control" id="dob" required>
                                <p>Date Type: DD/MM/YYYY</p>
                                <div class="invalid-feedback">
                                    Please provide a valid date type.
                                </div>
                                <div class="valid-feedback">
                                    Looks Good!
                                </div>
                            </div>
                        </div>

                        <div class="row mx-2">
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="nationality" class="form-label">Nationality <span class="text-danger">*</span></label>
                                <input type="text" name="nationality" class="form-control" id="nationality" required>

                                <div class="invalid-feedback">
                                    Please provide your country.
                                </div>

                            </div>

                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="religion" class="form-label">Select Religion <span class="text-danger">*</span></label>
                                <select name="religion" class="form-select" id="religion" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="muslim">Muslim</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="others">Other</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid religion.
                                </div>
                                <div class="valid-feedback">
                                    Looks Good!
                                </div>
                            </div>
                        </div>
                        <div class="row mx-2">
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="gender" class="form-label">Select Gender <span class="text-danger">*</span></label>
                                <select name="gender" class="form-select" id="gender" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid gender.
                                </div>
                                <div class="valid-feedback">
                                    Looks Good!
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="bloodGroup" class="form-label">Select Blood Group </label>
                                <select name="blood_group" class="form-select" id="bloodGroup" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                                <div class="valid-feedback">
                                    Looks Good!.
                                </div>
                            </div>
                        </div>

                    </div>
                    <h3 class="my-4">Address Information:</h3>
                    <div class="card shadow my-3">
                        <div class="row mx-2">
                            <div class="col-12 col-lg-12 col-xl-12 mb-3">
                                <label for="permanentAddress" class="form-label">Permanent Address <span class="text-danger">*</span></label>
                                <textarea name="permanent_address" class="form-control" id="permanentAddress" cols="30" rows="2" required></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide your permanent address.
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-12 mb-3">
                                <label for="postCode" class="form-label">Post Code <span class="text-danger">*</span></label>
                                <input type="text" name="p_post_code" class="form-control " id="postCode" value="Otto"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Provide your post code.
                                </div>
                            </div>
                        </div>

                        <div class="row mx-2">
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="pDstrict" class="form-label">District</label>
                                <input type="text" name="p_district" class="form-control" id="pDstrict" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="pThana" class="form-label">Thana</label>
                                <input type="text" name="p_thana" class="form-control" id="pThana" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                        </div>
                        <div class="row mx-2">
                            <div class="col-12 mb-3">
                                <input type="checkbox" class="" id="exampleCheck1">
                                <label class="" for="exampleCheck1">Same As Present</label>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-12 mb-3">
                                <label for="persentAddress" class="form-label">Present Address <span class="text-danger">*</span></label>
                                <textarea name="persent_address" class="form-control" id="persentAddress" cols="30" rows="2"></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please provide present address.
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-12 mb-3">
                                <label for="postCode" class="form-label">Post Code <span class="text-danger">*</span></label>
                                <input type="text" name="pre_post_code" class="form-control " id="postCode" required value=""
                                    required>
                                <div class="invalid-feedback">
                                    Please provide present post code.
                                </div>
                            </div>
                        </div>

                        <div class="row mx-2">
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="district" class="form-label">District <span class="text-danger">*</span></label>
                                <input type="text" name="pre_district" class="form-control" id="district" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="thana" class="form-label">Thana <span class="text-danger">*</span></label>
                                <input type="text" name="pre_thana" class="form-control" id="thana" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                        </div>

                    </div>
                    <h3 class="my-4">Parents Information:</h3>
                    <div class="card shadow my-3">
                       <div class="row mx-2">
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="fatherName" class="form-label">Father's Name <span class="text-danger">*</span></label>
                            <input type="text" name="father_name" class="form-control" id="fatherName" value="Mark"
                                required>
                            <div class="invalid-feedback">
                                Please provide your father's name.
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="fatherNid" class="form-label">NID <span class="text-danger">*</span></label>
                            <input type="text" name="father_nid" class="form-control " id="fatherNid" value="Otto"
                                required>
                            <div class="invalid-feedback">
                                Please provide father's nid.
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="Occopation" class="form-label">Occupation <span class="text-danger">*</span></label>
                            <input type="text" name="father_occuoation" class="form-control" id="Occopation" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="fatherMobileNo" class="form-label">Mobile NO. <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="father_mobile_no" id="fatherMobileNO" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="fatherEmail" class="form-label">Email</label>
                            <input type="text" name="father_email" class="form-control" id="fatherEmail">

                        </div>
                       </div>
                        <div class="row mx-2">
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="mother_name" class="form-label">Mothers Name <span class="text-danger">*</span></label>
                                <input type="text" name="mother_name" class="form-control" id="mother_name" required>
                                <div class="invalid-feedback">
                                    Please provide a your mother's name.
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="mother_nid" class="form-label">NID <span class="text-danger">*</span></label>
                                <input type="text" name="mother_nid" class="form-control " id="mother_nid" value=""
                                    required>
                                <div class="invalid-feedback">
                                    Please provide mother's nid
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="mother_occopation" class="form-label">Occupation</label>
                                <input type="text" name="mother_occopation" class="form-control" id="mother_occopation">

                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="mother_mobile_no" class="form-label">Mobile NO.</label>
                                <input type="text" name="mother_mobile_no" class="form-control" id="mother_mobile_no">

                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="mother_email" class="form-label">Email</label>
                                <input type="text" name="mother_email" class="form-control" id="mother_email" >

                            </div>
                       </div>

                    </div>
                    <h3 class="my-4">Local Guardian</h3>
                    <div class="card shadow my-3">
                        <div class="row mx-2">
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="local_guardian_name" class="form-label">Local Guardian Name <span class="text-danger">*</span></label>
                                <input type="text" name="local_guardian_name" class="form-control" id="local_guardian_name" required>
                                <div class="invalid-feedback">
                                    Please provide your local guardian name.
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="local_guardian_nid" class="form-label">NID</label>
                                <input type="text" name="local_guardian_nid" class="form-control " id="local_guardian_nid" value=""
                                    >

                            </div>

                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="local_guardian_relation" class="form-label">Relation</label>
                                <input type="text" name="local_guardian_relation" class="form-control" id="local_guardian_relation">

                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="local_guardian_mobile_no" class="form-label">Mobile NO.</label>
                                <input type="text" name="local_guardian_mobile_no" class="form-control" id="local_guardian_mobile_no">

                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="local_guardian_email" class="form-label">Email</label>
                                <input type="text" name="local_guardian_email" class="form-control" id="local_guardian_email" >

                            </div>
                       </div>
                    </div>



                    <h3 class="my-4">Previous Institute</h3>
                    <div class="card shadow my-3">
                        <div class="row mx-2">
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="previous_institute_name" class="form-label">Previous Institute Name <span class="text-danger">*</span></label>
                                <input type="text" name="previous_institute_name" class="form-control" id="validatiprevious_institute_nameonCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide previous institute name.
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="previous_class" class="form-label">Class <span class="text-danger">*</span></label>
                                <input type="text" name="previous_class" class="form-control " id="previous_class" value=""
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="previous_institute_address" class="form-label">Address <span class="text-danger">*</span></label>
                                <input type="text" name="previous_institute_address" class="form-control" id="previous_institute_address" required>
                                <div class="invalid-feedback">
                                    Please provide privious institute address.
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-6 mb-3">
                                <label for="previuous_result" class="form-label">Result <span class="text-danger">*</span></label>
                                <input type="text" name="previuous_result" class="form-control" id="previuous_result" required>
                                <div class="invalid-feedback">
                                    Please provide previous institute result.
                                </div>
                            </div>

                       </div>
                    </div>

                    <h3 class="my-4">Accouts Information</h3>
                    <div class="card shadow my-3">
                       <div class="row mx-2">
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="student_phone_number" class="form-label">Students Phone Number <span class="text-danger">*</span></label>
                            <input type="text" name="student_phone_number" class="form-control" id="student_phone_number" value=""
                                required>
                            <div class="invalid-feedback">
                                Please provide a student phone no.
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="Session" class="form-label">Session <span class="text-danger">*</span></label>
                            <select name="session" class="form-select" id="Session" required>
                                <option selected disabled value="">Choose...</option>
                                @foreach ($session_years as $session_year)
                                    <option value="{{ $session_year->session }}">{{ $session_year->session }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a session year.
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="class" class="form-label">Class <span class="text-danger">*</span></label>
                            <select name="class" id="classId" class="form-select" id="class" required>
                                <option selected disabled value="">Choose...</option>
                                @foreach ($classes as $class)
                                    <option value="{{ $class->class_name_numeric}}">{{ $class->class_name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Please select a class.
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="Section" class="form-label">Section <span class="text-danger">*</span></label>
                            <select name="section" id="classGroup" class="form-select" id="Section" required>
                                <option selected disabled value="">Choose...</option>

                            </select>
                            <div class="invalid-feedback">
                                Please select a section.
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-12 mb-3">
                            <label for="rollNumber" class="form-label">Roll Number <span class="text-danger">*</span></label>
                            <input type="text" name="class_roll" class="form-control" id="rollNumber" required>
                            <div class="invalid-feedback">
                                Please provide valid class roll number like 001, 002, 003 etc.
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="email" required>
                            <div class="invalid-feedback">
                                Please provide a valid email.
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 mb-3">
                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="text" name="password" class="form-control" id="password" required>
                            <div class="invalid-feedback">
                                Please provide a valid password like (student_name)1234.
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-12 mb-3">
                            <label for="image" class="form-label">Students Photo <span class="text-danger">*</span></label>
                            <input type="file" name="image" class="form-control"  onchange="studentPhoto(event)" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-12 mb-3">
                            <label for="validationCustom03" class="form-label"></label>

                            <div class="card bg-light">
                                <img src="{{ asset('assets/backend/avatar/student_avatar.jpg') }}" id="output" alt="" width="150px" height="150px" />
                            </div>
                        </div>
                       </div>

                       <div class="row mx-2">
                        <div class="col-12">
                            <button class="btn-fill-sm btn-gradient-yellow btn-hover-bluedark text-white" type="submit">Submit form</button>
                        </div>
                       </div>

                    </div>
                </div>



            </form>
        </div>
    </div>
@endsection


@section('js')

    <script>

        // validation javascript


            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
                })
            })()

    </script>

    <script>
        var studentPhoto = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>


    <script>
        $(document).ready(function(){

            $('#classId').change(function(){
                let classId = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"POST",
                    url:"{{ route('admin.student.class.group') }}",
                    data:{
                        class_id : classId,
                    },
                    success:function(data) {
                        $("#classGroup").html(data);
                    }
                });
            });

        });
    </script>

@endsection
