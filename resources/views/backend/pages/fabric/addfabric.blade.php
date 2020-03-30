@extends('backend.layout.app')
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Form Repeater</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="outer-repeater" method="post" enctype="multipart/form-data">@csrf
                            <div data-repeater-list="outer-group" class="outer">
                                <div data-repeater-item class="outer">
                                    <div class="form-group">
                                        <label for="name">Name :</label>
                                        <input type="text" class="form-control" name="fab_name" id="fab_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="style_no">Style No :</label>
                                        <input type="text" class="form-control" name="style_no" id="style_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="material">Material :</label>
                                        <input type="text" class="form-control" name="material" id="material">
                                    </div>
                                    <div class="form-group">
                                        <label for="width">Width :</label>
                                        <input type="text" class="form-control" name="width" id="width">
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Weight :</label>
                                        <input type="text" class="form-control" name="weight" id="weight">
                                    </div>
                                    <div class="form-group">
                                        <label for="feel">Feel :</label>
                                        <input type="text" class="form-control" name="feel" id="feel">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price :</label>
                                        <input type="text" class="form-control" name="price" id="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Quantity :</label>
                                        <input type="text" class="form-control" name="quantity" id="quantity">
                                    </div>

                                    <div class="inner-repeater mb-4 increment">
                                        <div class="form-group control-group">
                                            <label>Fabric Image :</label>
                                            <div data-repeater-item class="inner mb-3 row ">
                                                <div class="col-md-12 col-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="img" name="img[]">
                                                        <label class="custom-file-label" for="img">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input data-repeater-create type="button" class="btn btn-success" value="Add Iamge" />
                                    </div>

                                    <div class="inner-repeater mb-4 clone" style="display: none">
                                        <div class="control-group form-group">
                                            <div data-repeater-item class="inner mb-3 row ">
                                                <div class="col-md-10 col-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="img" name="img[]">
                                                        <label class="custom-file-label" for="img">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-4">
                                                    <input data-repeater-delete type="button" class="btn btn-primary delete btn-block inner" value="Delete" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection