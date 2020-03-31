@extends('backend.layout.app')
@section('content')

@foreach($fabrics as $fabric)
@endforeach
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Update fabric</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="outer-repeater" name="addFabric" id="addFabric" method="post" enctype="multipart/form-data">@csrf
                            <div data-repeater-list="outer-group" class="outer">
                                <div data-repeater-item class="outer">
                                    <div class="form-group">
                                        <label for="name">Name :</label>
                                        <input type="text" class="form-control" value="{{$fabric->name}}" name="fab_name" id="fab_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="style_no">Style No :</label>
                                        <input type="text" class="form-control" value="{{$fabric->style_no}}" name="style_no" id="style_no">
                                    </div>
                                    <div class="form-group">
                                        <label for="material">Material :</label>
                                        <input type="text" class="form-control" value="{{$fabric->material}}" name="material" id="material">
                                    </div>
                                    <div class="form-group">
                                        <label for="width">Width :</label>
                                        <input type="text" class="form-control" value="{{$fabric->width}}" name="width" id="width">
                                    </div>
                                    <div class="form-group">
                                        <label for="weight">Weight :</label>
                                        <input type="text" class="form-control" value="{{$fabric->weight}}" name="weight" id="weight">
                                    </div>
                                    <div class="form-group">
                                        <label for="feel">Feel :</label>
                                        <input type="text" class="form-control" value="{{$fabric->feel}}" name="feel" id="feel">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price :</label>
                                        <input type="text" class="form-control" value="{{$fabric->price}}" name="price" id="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Quantity :</label>
                                        <input type="text" class="form-control" value="{{$fabric->quantity}}" name="quantity" id="quantity">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Quantity :</label>
                                                <select class="form-control" name="stock">
                                                    <option value="in_stock" {{ $fabric->stock == 'in_stock' ? "selected" : '' }}>In Stoke</option>
                                                    <option value="stock_out" {{ ($fabric->stock == 'stock_out' ? "selected" : '') }}>Out of Stoke</option>
                                                </select>
                                    </div>
                                    
                                    <div class="row">
                                    @foreach($images as $image)
                                    <div class="col-lg-3 record">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="product-img position-relative">
                                                    <div class="avatar-sm product-ribbon">
                                                        <a href="javascript:void(0)"><span class="avatar-title rounded-circle  bg-primary SingleFabDelete" data-id="{{$image->id}}">
                                                        
                                                        </span></a>
                                                    </div>
                                                    <img src="{{asset('public/Uploads/Fabric/'.$image->img_name)}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                    
                                    <div class="inner-repeater mb-4 increment">
                                        <div class="form-group control-group">
                                            <label>Fabric Image :</label>
                                            <div data-repeater-item class="inner mb-3 row ">
                                                <div class="col-md-10 col-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="img" name="img[]">
                                                        <label class="custom-file-label" for="img">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-4">
                                                <input data-repeater-create type="button" class="btn btn-success" value="Add Iamge" />
                                                </div>
                                            </div>
                                        </div>
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