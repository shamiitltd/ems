@extends('admin_dashboard')
@section('admin')
<head>
<link href="{{ asset('backend/assets/css/recruitmentstyle.css') }}" rel="stylesheet" type="text/css" id="app-style"/>
</head>
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-3">
                <a href="" id="inbox">
                    <h4 class="inbox">RECRUITMENT INBOX</h4>
                </a>
                <main class="content mt-2 mb-3 --bs-body-bg">
                    <div class="container p-0">
                        <div class="card " style="width: 19rem;">
                            <div class="row g-0">
                                <div class="border-right">
                                    <div class="input-group my-2">
                                        <svg id="svg" xmlns="http://www.w3.org/2000/svg" width="22" height="23"
                                            viewBox="0 0 22 23" fill="none">
                                            <path
                                                d="M9.46154 18.4231C14.1347 18.4231 17.9231 14.6347 17.9231 9.96154C17.9231 5.28835 14.1347 1.5 9.46154 1.5C4.78835 1.5 1 5.28835 1 9.96154C1 14.6347 4.78835 18.4231 9.46154 18.4231Z"
                                                stroke="#9C9FA1" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M21.0001 21.5L15.6155 16.1154" stroke="#4B8291" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <!-- <span class="input-group-text"><i class="fa fa-search"></i></span> -->
                                        <input type="text" name="query" class="form-control  mx-2" id="searchInput"
                                            placeholder="Search">
                                        <svg id="filter" xmlns="http://www.w3.org/2000/svg" width="22" height="23"
                                            viewBox="0 0 22 23" fill="none">
                                            <path id="pathstok"
                                                d="M21 1.5H1L8.69231 12.2692V21.5L13.3077 18.4231V12.2692L21 1.5Z"
                                                stroke="#7B8082" stroke-width="1.4" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>

                                    <div id="candidateList">
                                        @foreach($allCandidate as $key => $item)
                                        <b>
                                            <div class="d-flex align-items-start candidate-item" id="myDropdown">
                                                <img src="{{ asset($item->candidate_profile) }}"
                                                    class="rounded-circle my-1" alt="Vanessa Tucker" width="60"
                                                    height="62.614" style="margin-left:20px;">
                                                <div class="flex-grow-1 ml-3" style="margin-left:20px;">
                                                    <p class="name">{{$item->candidate_name}}</p>
                                                    <div class="small"><span>Skill :
                                                        </span>{{$item->interpersonal_skill}}</div>
                                                </div>
                                            </div>
                                        </b>
                                        @endforeach
                                    </div>
                                    <hr class="d-block d-lg-none mt-1 mb-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

            <div class="col-6" style="margin-right:1px;">
                <a href="">
                    <h4>WORK INBOX</h4>
                </a>
                <div class="card ">
                    <div class="card-body">
                        <div>
                            <span id="anystudio">Your Application for Senior UIUX Designer - AnyStudio </span><br>
                            <span class="Team">Job Senior UIUX Designer | Design Team</span>
                        </div>
                        <div style="background: #EBF0F1;border-radius: 8px;" class="box">
                            <a href="https://myaccount.google.com/?utm_source=sign_in_no_continue&pli=1"
                                class="email">Email</a>
                            <a href="https://web.whatsapp.com/#" class="whatappp">Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
             
                <div class="card paerticularemp mt-4" style="width: 19rem;">
                    <div class="profilediv">
                       <img src="../backend/assets/images/Ellipse 7.svg" class="imgemp">
                       <b class="Cody">Cody Fisher</b>
                       <div>
                            <p class="rating"> <img src="../backend/assets/images/star 1.png"> 4.0 <span id="Puworkerto">Puworkerto</span></p>
                            <a href=""><span class="ViewProfile">View Profile</span></a> 
                        </div>
                    </div>  
                    <div class="second">
                       <span id="Applied">Applied For :</span>
                       <b class="Job">Job Senior UIUX Designer</b>
                            <p class="paragraph"> Design Team <br> <br><img src="../backend/assets/images/Rectangle 57.png" class="rectangleonly">
                            <img src="../backend/assets/images/Rectangle 57.png" class="rectangleonly">
                            <img src="../backend/assets/images/Rectangle 57.png" id="imgcolor">
                            <img src="../backend/assets/images/Rectangle 57.png" id="imgcolor">
                            <img src="../backend/assets/images/Rectangle 57.png" id="imgcolor">
                        </p>
                                     
                    </div> 
                    <div class="third">
                       <p class="comt"><img src="../backend/assets/images/mail.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;codyfisher@gmail.comt</p>   
                       <p class="comt"><img src="../backend/assets/images/phone.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>+123-487-232-7423</span></p>         
                    </div>  
                    <div class="forth">
                    <a href=""><img src="../backend/assets/images/Add Circle.png" width="20px" height="20px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="AddOwner">Add Owner</span></a>        
                    </div>  
                    <div class="fifth">
                    <p class="Schedule">Schedule <br> <br> <span class="Alignment">
                      Alignment for onboarding 
                      welcome new member 
                      product Team</span><div id="approval">waiting approval</div> <b class="mar">Mar 9th 2023    7.00 - 7.45am</b>
                      <span class="Schedule">View summery</span></p>

                     
                    </div>
                </div>
        </div>


        </div>


    </div>
    <!-- End Start Content-->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $("#inbox").css({
            "text-decoration": "underline",
            "text-decoration-thickness": "3px",
            "text-underline-offset": "10px"
        });
        $("#inbox").css("color", "rgba(246, 152, 41, 0.60)");

        $(".inbox").css({
            "color": "black",
        });

        $("h4").css({
            "margin-left": "40px",
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#searchInput').on('keyup', function () {
            var value = $(this).val().toLowerCase(); // Get input value
            $('b').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>
@endsection