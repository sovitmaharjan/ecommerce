@extends('layouts.app')

@section('title', 'Customer Dashboard')

@section('content')
    <section class="breadcrumb__area box-plr-75">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Customer Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="shop-area mb-85">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    @include('layouts.sidebar')
                </div>
                <div class="col-xl-9 col-lg-8">
                    <h5 class="sidebar-title">Profile</h5>
                    <div class="team-area light-bg-s pt-70 pb-40">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-team text-center mb-30">
                                        <div class="team-image mb-35 w-img">
                                            <div class="inner-timg">
                                                <img class="object-fit" src="{{ Auth::user()->customerProfile->image ? Auth::user()->customerProfile->image->getUrl() : asset('no-image.png') }}" id="image_load" alt="">
                                            </div>
                                        </div>
                                        <div class="tauthor-degination mb-15">
                                            <h5>{{ Auth::user()->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-team mb-30">
                                        <div class="basic-login">
                                            <form action="{{ route('customer.profile.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div>
                                                    <label for="name">Image <span>*</span></label>
                                                    <input type="file" id="image" name="image" />
                                                    <label for="name">Fullname <span>*</span></label>
                                                    <input id="name" type="text" placeholder="Enter Name" name="name" value="{{ old('name') ?? Auth::user()->name }}">
                                                    @error('name')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                    <label for="mobile">Mobile <span>*</span></label>
                                                    <input id="mobile" type="text" placeholder="Enter Mobile Number" name="mobile" value="{{ old('mobile') ?? (Auth::user()->customerProfile ? Auth::user()->customerProfile->mobile : '') }}">
                                                    @error('mobile')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                    <label for="dob">DOB</label>
                                                    <input id="dob" type="text" placeholder="Enter Phone Number" name="dob" value="{{ old('dob') ?? (Auth::user()->customerProfile ? Auth::user()->customerProfile->dob : '') }}">
                                                    <label for="gender">Gender</label><br/>
                                                    <select id="gender" name="gender">
                                                        <option value="male" {{ old('gender') ? (old('gender') == 'male' ? 'selected' : '') : (Auth::user()->customerProfile ? (Auth::user()->customerProfile->gender == 'male' ? 'selected' : '') : '') }}>Male</option>
                                                        <option value="female" {{ old('gender') ? (old('gender') == 'female' ? 'selected' : '') : (Auth::user()->customerProfile ? (Auth::user()->customerProfile->gender == 'female' ? 'selected' : '') : '') }}>Female</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="tp-in-btn w-100 mt-30">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#image').on('change', function() {
                var image = document.getElementById('image_load');
                image.src = URL.createObjectURL(event.target.files[0]);
            });
        });
    </script>
@endsection