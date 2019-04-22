<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
    <script src="{{asset('js/main.js')}}"></script>
    <title>Users' dashboard</title>
</head>
<body>

@include('navbar.navbar')

<div class="router-table centered-size mb-5">
    <div class="router-title">DASHBOARD</div>

    <div class="router-tabs indent-box">
        <div class="router-tab" data-target="#my_fav">MY FAVOURITES</div>
        <div class="router-tab" data-target="#my_ann">MY ANNOUNCEMENTS</div>
        <div class="router-tab" data-target="#my_set">SETTINGS</div>
    </div>

    <div class="router-display">


        <div id="my_fav" class="router-content">
            <div class="data-list">
                <div class="data-spanner" data-span="false"></div>

                <!-- provide each data here --> <!-- my favourite -->
                <div class="data-box box-shadow">
                    <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                    <div class="name-detail">
                        <span>PUPPY NAME</span><br/>
                    </div>
                    <div class="button-action">
                        <div class="simple-button box-shadow danger">&#128148;&nbsp;UNFAVOURITE</div>
                    </div>
                </div>

            </div>
        </div>


        <div id="my_ann" class="router-content">
            <div class="anchor-button sticky-left"><a href="/static/announcement/create"
                                                      target="_blank">ADD NEW</a></div>
            <div class="data-list">
                <div class="data-spanner" data-span="false"></div>

                <!-- provide each data here --> <!-- my announcement -->
                <div class="data-box box-shadow">
                    <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                    <div class="name-detail">
                        <span>PUPPY NAME</span><br/>
                        <span>Seller Name</span>
                    </div>
                    <div class="button-action">
                        <div class="simple-button box-shadow danger">&#128221;&nbsp;EDIT</div>
                        <div class="simple-button box-shadow danger">&#128465;&nbsp;DELETE</div>
                    </div>
                </div>

                <!-- just repeating data -->
                <div class="data-box box-shadow">
                    <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                    <div class="name-detail">
                        <span>PUPPY NAME</span><br/>
                        <span>Seller Name</span>
                    </div>
                    <div class="button-action">
                        <div class="simple-button box-shadow danger">&#128221;&nbsp;EDIT</div>
                        <div class="simple-button box-shadow danger">&#128465;&nbsp;DELETE</div>
                    </div>
                </div>

                <div class="data-box box-shadow">
                    <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                    <div class="name-detail">
                        <span>PUPPY NAME</span><br/>
                        <span>Seller Name</span>
                    </div>
                    <div class="button-action">
                        <div class="simple-button box-shadow danger">&#128221;&nbsp;EDIT</div>
                        <div class="simple-button box-shadow danger">&#128465;&nbsp;DELETE</div>
                    </div>
                </div>

                <div class="data-box box-shadow">
                    <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                    <div class="name-detail">
                        <span>PUPPY NAME</span><br/>
                        <span>Seller Name</span>
                    </div>
                    <div class="button-action">
                        <div class="simple-button box-shadow danger">&#128221;&nbsp;EDIT</div>
                        <div class="simple-button box-shadow danger">&#128465;&nbsp;DELETE</div>
                    </div>
                </div>
                <!-- end repeating -->

            </div>

        </div>
        <div id="my_set" class="router-content">
            <!-- for manage user's profile -->
            <div class="section">
                <div class="title">PROFILE</div>
                <form action="" method="post" class="indent-box">
                    <div class="picture-uploader">
                        <div class="profile-picture"></div>
                        <div class="upload">
                            <label for="profile_image">Profile Picture</label><br/>
                            <div class="commit-button sticky-left">
                                <label for="profile_image" class="inner-blue box-shadow">SELECT FILE</label>
                                <input id="profile_image" name="profile_image" type="file"
                                       accept="image/png, image/jpg, image/jpeg"></input>
                            </div>
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="email">Email</label>
                        <input class="box-shadow" type="email" id="email" name="email" required>
                    </div>
                    <div class="input-field">
                        <label for="old_password">Old Password</label>
                        <input class="box-shadow" type="password" id="old_password" name="old_password" required>
                    </div>
                    <div class="input-field">
                        <label for="new_password">New Password</label>
                        <input class="box-shadow" type="password" id="new_password" name="new_password" required>
                    </div>
                    <div class="input-field">
                        <label for="re_type_new_password">Re-type New Password</label>
                        <input class="box-shadow" type="password" id="re_type_new_password" name="re_type_new_password">
                    </div>
                    <div class="commit-button sticky-left">
                        <label for="save" class="outer-blue">SAVE</label>
                        <input id="save" type="submit"></input>
                    </div>
                </form>
            </div>

            <div class="section">
                <div class="title">VERIFICATION</div>
                <form action="" method="post" class="indent-box">
                    <span><b> STEP ONE: </b>ID CARD WITH YOURSELF</span>
                    <div class="commit-button" style="margin-top: 1rem;">
                        <label for="id_card_image" class="inner-blue box-shadow" style="margin-top: 1rem;">SELECT
                            FILE</label>
                        <input id="id_card_image" name="id_card_image" type="file"
                               accept="image/png, image/jpg, image/jpeg"></input>
                    </div>
                    <br/>
                    <span><b> STEP TWO: </b>SEND REQUEST</span>
                    <div class="commit-button" style="margin-top: 1rem;">
                        <label for="request" class="outer-blue" style="margin-top: 1rem;">REQUEST</label>
                        <input id="request" type="submit"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('footer.footer')
</body>
</html>