@extends('backend.layout.app')
@section('content')

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Fabric List</h4>
                                </div>
                            </div>
                        </div>     
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="fabriclist" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>@csrf
                                            <tr>
                                                <th>Fabric Name</th>
                                                <th>Style no</th>
                                                <th>Material</th>
                                                <th>Width</th>
                                                <th>Weight</th>
                                                <th>Feel</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Stock</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($fabrics as $fabric)
                                            <tr>
                                                <td>{{$fabric->name}}</td>
                                                <td>{{$fabric->style_no}}</td>
                                                <td>{{$fabric->material}}</td>
                                                <td>{{$fabric->width}}</td>
                                                <td>{{$fabric->weight}}</td>
                                                <td>{{$fabric->feel}}</td>
                                                <td>{{$fabric->price}}</td>
                                                <td>{{$fabric->quantity}}</td>
                                                <td>{{$fabric->stock}}</td>
                                                <td><a href="{{ route('updateFabric', $fabric->id) }}"><button class="btn btn-xs btn-info"><i class="fa fa-edit"></i></button></a></td>
                                                <td><a href="" data-toggle="modal" data-target="#deletemodel" class="btn btn-xs btn-danger deleteFabric" data-id="{{$fabric->id}}"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            @endforeach                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div> 
                </div>

@endsection