@extends('static.layouts.app')

@section('content')

    <section id="announcement">
        <div class="container">
            <h1 class="text-uppercase mb-3">Add pictures to New Announcement</h1>
            {!! Form::open(['method'=>'POST', 'action'=>'OffersController@store', 'class'=>'ml-0 ml-md-5']) !!}
            <h2 class="text-uppercase text-primary">Pictures</h2>
            <div class="ml-0 ml-md-3">
                <div class="indent-box">
                    <div class="picture-uploader">
                        <div class="profile-picture mr-3" style="width: 100px; height: 130px;"></div>
                        <div class="upload">
                            <label for="main_image" class="required">Main Picture</label><br/>
                            <div class="commit-button sticky-left">
                                <label for="main_image" class="inner-blue box-shadow">SELECT FILE</label>
                                <input id="main_image" name="main_image" type="file"
                                       accept="image/png, image/jpg, image/jpeg" required>
                            </div>
                            <br/><br/><span id="main_text" style="color: rgb(100, 100, 100); font-size: .8rem;">Upload your image.</span>
                        </div>
                    </div>
                    <p class="d-inline text-primary">Additional pictures</p>
                    <div class="commit-button" style="margin: 1rem 0 0 1rem;">
                        <label for="additional_image" class="inner-blue box-shadow">SELECT MULTIPLE FILES</label>
                        <input id="additional_image" name="additional_image[]" type="file"
                               accept="image/png, image/jpg, image/jpeg" multiple>
                    </div>
                    <br/><br/><span id="additional_text"
                                    style="color: rgb(100, 100, 100); font-size: .8rem;">PNG, JPG, JPEG</span>
                </div>

                {!! Form::submit('Add', ['class'=>'btn btn-primary mt-5']) !!}
                {!! Form::close() !!}
            </div>
            <br>
    </section>

@endsection
