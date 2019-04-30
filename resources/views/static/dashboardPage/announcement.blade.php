@extends('static.layouts.app')

@section('content')

    <section id="announcement">
        <div class="container">
            <h1 class="text-uppercase mb-3">Create New Announcement</h1>
            <form class="ml-0 ml-md-5" action="" method="post">
                @csrf
                <h2 class="text-uppercase text-primary">Basic Information</h2>
                <div class="ml-0 ml-md-3">
                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            <label for="puppy_name">Puppy Name</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control"
                                       id="puppy_name" name="puppy_name" placeholder="Puppy Name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            <label for="basic_info_1">Basic Info 1</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control"
                                       id="basic_info_1" name="basic_info_1" placeholder="Basic Info 1" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            <label for="basic_info_2">Basic Info 2</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control"
                                       id="basic_info_2" name="basic_info_2" placeholder="Basic Info 2">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            <label for="basic_info_3">Basic Info 3</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control"
                                       id="basic_info_3" name="basic_info_3" placeholder="Basic Info 3">
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="text-uppercase text-primary">Contact</h2>
                <div class="ml-3">
                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            <label for="telephone">Telephone</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="tel" class="form-control"
                                       id="telephone" name="telephone" placeholder="Telephone number" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            <label for="email">Email</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="email" class="form-control"
                                       id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            <label for="facebook">Facebook</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control"
                                       id="facebook" name="facebook" placeholder="Facebook">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-md-3 col-sm-12">
                            <label for="line">Line</label>
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control"
                                       id="line" name="line" placeholder="Line">
                            </div>
                        </div>
                    </div>
                </div>


                <h2 class="text-uppercase text-primary">Pictures</h2>
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

                <h2 class="text-uppercase text-primary">Additional</h2>
                <div class="indent-box">
                    <label for="description"></label>
                    <div style="background-color: #405377; padding-left: 1rem;">
                    <textarea name="description" id="description" cols="30" rows="5" class="box-shadow"
                              maxlength="100"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </form>
        </div>
        <br>
    </section>

@endsection
