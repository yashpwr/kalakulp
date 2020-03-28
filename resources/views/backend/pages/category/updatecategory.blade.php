@extends('backend.layout.app')
@section('content')
@foreach($categories as $category)
@endforeach

<div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Update Category</h4>
                                        <p class="card-title-desc"></p>
                                        <form class="needs-validation" novalidate id="addCategory" name="addCategory" method="post" enctype="multipart/form-data">@csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title">Category Name</label>
                                                        <input type="text" class="form-control" id="category_name" value="{{$category->category_name}}" name="category_name" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div> 
                    </div> 
                </div>
@endsection