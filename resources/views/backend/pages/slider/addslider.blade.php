@extends('backend.layout.app')
@section('content')


<div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Upload Slider Image</h4>
                                        <p class="card-title-desc"></p>
                                        <form class="needs-validation" novalidate id="addSlider" name="addSlider" method="post" enctype="multipart/form-data">@csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title">Slider Title</label>
                                                        <input type="text" class="form-control" id="title" name="title" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description">Slider Description</label>
                                                        <input type="text" class="form-control" id="description" name="description" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="img">Upload Slider Image</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="img" name="img" required>
                                                            <label class="custom-file-label" for="img">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                   
                                            <button class="btn btn-primary" type="submit">Submit form</button>
                                        </form>
                                    </div>
                                </div>
                            </div> 
                    </div> 
                </div>


@endsection