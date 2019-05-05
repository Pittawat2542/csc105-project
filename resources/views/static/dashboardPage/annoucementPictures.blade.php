@extends('static.layouts.app')

@section('content')

    <section id="announcement">
        <div class="container">
            <h1 class="text-uppercase mb-3">Add pictures to New Announcement</h1>
            {!! Form::open(['method'=>'STORE', 'action'=>'OffersController@storePictures', 'files'=>true]) !!}
            <h2 class="text-uppercase text-primary">Pictures</h2>
            <div class="ml-0 ml-md-3">
                <div class="indent-box">
                    <div class="picture-uploader">
                        <div class="profile-picture mr-3" style="width: 100px; height: 130px;"></div>
                        <div class="upload">
                            <label for="main_image" class="required">Main Picture</label><br/>
                            <div class="commit-button sticky-left">
                                {!! Form::label('photo', 'Select File', ['class'=> 'box-shadow text-uppercase']) !!}
                                {!! Form::file('photo', ['class'=>'form-control']) !!}
                            </div>
                            <br/><br/><span id="main_text" style="color: rgb(100, 100, 100); font-size: .8rem;">Upload your image.</span>
                        </div>
                    </div>
                    <p class="d-inline text-primary">Additional pictures</p>
                    <div class="commit-button" style="margin: 1rem 0 0 1rem;">
                        {!! Form::hidden('offer_id', $offer->id) !!}
                        {!! Form::label('photoadd[]', 'Select additional pictures', ['class'=> 'box-shadow text-uppercase']) !!}
                        {!! Form::file('photoadd[]', ['multiple' => 'multiple']) !!}
                        {{--                        <input id="additional_image" name="additional_image[]" type="file"--}}
                        {{--                               accept="image/png, image/jpg, image/jpeg" multiple>--}}
                    </div>
                    <br/><br/><span id="additional_text"
                                    style="color: rgb(100, 100, 100); font-size: .8rem;">PNG, JPG, JPEG</span>
                </div>

                {!! Form::submit('Add', ['class'=>'btn btn-primary mt-5']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <br>
    </section>

@endsection
