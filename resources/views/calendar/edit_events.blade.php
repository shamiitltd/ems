@extends('admin_dashboard')
@section('admin')
<center>
<div class="page-content">
    <div class="container-fluid">
        <div class="row justify-content-center  --bs-body-bg"> <!-- Center content -->
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Edit Event</h3>
                        <form method="post" action="{{ route('event.update', $event->id) }}">
                            @csrf

                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Title</label>
                                    <input name="event" class="form-control" type="text" value="{{ $event->title }}" id="example-text-input">
                                </div>
                                <div class="col-6">
                                <label class="form-label">Meeting URL</label>
                                <input name="link_url" class="form-control" type="url" value="{{ $event->link_url }}">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-6">
                                    <label class="form-label start">Candidate Profile</label>
                                    <input name="candidate_profile" class="form-control" type="file" id="image">
                                </div>
                                <div class="col-6">
                                  <label class="form-label">Candidate Name</label>
                                  <input name="candidate_name" class="form-control" type="text" value="{{ $event->candidate_name }}">
                                </div>
                            </div>
                            <div class="row mt-3">
                            <img id="showImage" src="{{  url('upload/no_image.jpg') }}" class="rounded-circle"
                        style="width:80px" alt="profile-image" value="{{ $event->candidate_profile }}">
                               </div>

                               <div class="row mt-3">
                                <div class="col-6">
                                <label class="form-label">Interpesronal Skills</label>
                                <input name="interpersonal_skill"
                            class="form-control" type="text"
                            id="example-text-input" style="border:none" value="{{ $event->interpersonal_skill}}">
                                </div>
                                <div class="col-6">
                                  <label class="form-label">Communication Skills</label>
                                  <input name="communication_skill"
                            class="form-control" type="text"
                            id="example-text-input" value="{{ $event->communication_skill}}">
                                </div>
                            </div>

                            <div class="row mt-3">
                                
                                <div class="col-6">
                                <label class="form-label">HR Profile</label>
                    <input name="hr_profile" class="form-control" type="file"
                      id="image2">
                                </div>
                                <div class="col-6">
                                <label class="form-label">Problem solving</label>
                                <input name="problem_sovling"
                            class="form-control" type="text"
                            id="example-text-input" value="{{ $event->problem_sovling}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                            <img id="showImage" src="{{  url('upload/no_image.jpg') }}" class="rounded-circle"
                        style="width:80px" alt="profile-image" value="{{ $event->hr_profile }}">
                               </div>
                            
                               <div class="row mt-3">
                                <div class="col-6">
                                <label class="form-label">HR Name</label>
                  <input name="hr_name" class="form-control" type="text" value="{{ $event->hr_name }}">
                                </div>
                                <div class="col-6">
                                <label class="form-label"> HR Email ID</label>
                  <input name="hr_email" class="form-control" type="email" value="{{ $event->hr_email }}">
                                </div>
                            </div>

                            <div class="mt-4">
                            <label class="form-label">Instruction</label>
                  <input name="instruction" class="form-control" type="text"
                    id="example-text-input" value="{{ $event->instruction }}">
                            </div><br>
                            <div> 
                            </div><br>
                            <div>
                                <input type="submit" class="btn btn-info" value="Update" style="color:black;"> <!-- Styling for Update button -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
@endsection