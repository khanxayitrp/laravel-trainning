@extends('admin.main')
@section('admincontent')
<div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-10">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Basic Form Elements</h3>
                                    <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
                                </div>
                                <div class="card">
                                    <h5 class="card-header">PostJob Form</h5>
                                    <div class="card-body">
                                        <form action="{{route('webadmin.savejob')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Title</label>
                                                <input id="inputText3" type="text" class="form-control" name="Title">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Company Name</label>
                                                <input id="inputText3" type="text" class="form-control" name="Companyname">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Location</label>
                                                <input id="inputText3" type="text" class="form-control" name="Location">
                                            </div>
                                            
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="Logo">
                                                <label class="custom-file-label" for="customFile">Logo</label>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Job description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="JobDescription"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success">save</button>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
            </div>
    </div>
</div>
@endsection               