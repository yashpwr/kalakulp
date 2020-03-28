@php
$currRoute = Route::current()->getName();
@endphp

<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('admin')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="{{ $currRoute == 'sliderlist' || $currRoute == 'addslider' || $currRoute == 'updateslider'  ? 'active mm-active' : '' }}">
                    <a href="javascript: void(0);" class="has-arrow waves-effect {{ $currRoute == 'sliderlist' || $currRoute == 'addslider' || $currRoute == 'updateslider'  ? 'active mm-active' : '' }}">
                        <i class="bx bx-layout"></i>
                        <span>Slider</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('sliderlist')}}">Slider List</a></li>
                        <li><a href="{{route('addslider')}}">Add Slider</a></li>
                    </ul>
                </li>

                <li class="{{ $currRoute == 'categorylist' || $currRoute == 'addcategory' || $currRoute == 'updatecategory'  ? 'active mm-active' : '' }}">
                    <a href="javascript: void(0);" class="has-arrow waves-effect {{ $currRoute == 'categorylist' || $currRoute == 'addcategory' || $currRoute == 'updatecategory'  ? 'active mm-active' : '' }}">
                        <i class="bx bx-layout"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('categorylist')}}">Category List</a></li>
                        <li><a href="{{route('addcategory')}}">Add Category</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>