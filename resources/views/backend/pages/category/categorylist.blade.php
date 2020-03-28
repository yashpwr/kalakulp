@extends('backend.layout.app')
@section('content')

<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Category List</h4>
                                </div>
                            </div>
                        </div>     
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="categorylist" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>@csrf
                                            <tr>
                                                <th>Category Name</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($categories as $category)
                                            <tr>
                                                <td>{{$category->category_name}}</td>
                                                <td><a href="{{ route('updatecategory', $category->id) }}"><button class="btn btn-xs btn-info"><i class="fa fa-edit"></i></button></a></td>
                                                <td><a href="" data-toggle="modal" data-target="#deletemodel" class="btn btn-xs btn-danger deleteCategory" data-id="{{$category->id}}"><i class="fa fa-trash"></i></a></td>
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