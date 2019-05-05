@extends('static.layouts.app')

@section('content')

    <section id="announcement">
        <div class="container">
            <h1 class="text-uppercase mb-3">Create New Announcement</h1>
            {!! Form::open(['method'=>'POST', 'action'=>'OffersController@store', 'class'=>'ml-0 ml-md-5']) !!}
            <h2 class="text-uppercase text-primary">Basic Information</h2>

            <div class="ml-0 ml-md-3">

                <div class="form-group row mt-3">
                    <div class="col-md-3 col-sm-12">
                        {!! Form::label('title', 'Title of announcement') !!}
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <div class="col-md-3 col-sm-12">
                        {!! Form::label('name', 'Name') !!}
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            {!! Form::label('age', 'Age') !!}
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                {!! Form::text('age', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            {!! Form::label('category_id', 'Category') !!}
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                {!! Form::select('category_id', ['' => 'Select'] + $categories, null,
                ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            {!! Form::label('location', 'Location') !!}
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                {!! Form::text('location', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="text-uppercase text-primary">Contact</h2>
                <div class="ml-3">
                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            {!! Form::label('phone', 'Phone') !!}
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            {!! Form::label('facebook', 'Facebook') !!}
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                {!! Form::text('facebook', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            {!! Form::label('line', 'Line') !!}
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                {!! Form::text('line', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="text-uppercase text-primary">Additional</h2>
                <div class="indent-box">
                    {!! Form::label('description', 'Description') !!}
                    <div style="background-color: #405377; padding-left: 1rem;">
                        {!! Form::textarea('description', null, ['class'=>'box-shadow', 'rows'=>5, 'cols'=>30]) !!}
                    </div>
                </div>
                {!! Form::submit('Next step add pictures', ['class'=>'btn btn-primary mt-5']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <br>
    </section>

@endsection
