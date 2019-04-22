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
   <title>Create new announcement</title>
</head>
<body style="color: rgb(40, 40, 140);">

   @include('navbar.navbar')

   <div class="centered-size" style="margin: 1.2rem auto; width: 60%;">
      <p style="font-size: 2rem;">CREATE NEW ANNOUNCEMENT</p>
      <form action="" method="post" class="indent-box">
         <p style="font-size: 15px;">BASIC INFORMATION</p>
         <div class="indent-box">
            <div class="input-field">
               <label for="puppy_name" class="required">Puppy Name</label>
               <input class="box-shadow" type="text" id="puppy_name" name="puppy_name" required>
            </div>
            <div class="input-field">
               <label for="basic_info_1" class="required">Basic info 1</label>
               <input class="box-shadow" type="text" id="basic_info_1" name="basic_info_1" required>
            </div>
            <div class="input-field">
               <label for="basic_info_2">Basic info 2</label>
               <input class="box-shadow" type="text" id="basic_info_2" name="basic_info_2">
            </div>
            <div class="input-field">
               <label for="basic_info_3">Basic info 3</label>
               <input class="box-shadow" type="text" id="basic_info_3" name="basic_info_3">
            </div>
         </div>
         <p style="font-size: 15px;">CONTACT</p>
         <div class="indent-box">
            <div class="input-field">
               <label for="telephone" class="required">Telephone</label>
               <input class="box-shadow" type="tel" id="telephone" name="telephone" required>
            </div>
            <div class="input-field">
               <label for="email" class="required">Email</label>
               <input class="box-shadow" type="email" id="email" name="email" required>
            </div>
            <div class="input-field">
               <label for="facebook">Facebook</label>
               <input class="box-shadow" type="text" id="facebook" name="facebook">
            </div>
            <div class="input-field">
               <label for="line">Line</label>
               <input class="box-shadow" type="text" id="line" name="line">
            </div>
         </div>
         <p style="font-size: 15px;">PICTURES</p>
         <div class="indent-box">
            <div class="picture-uploader">
               <div class="profile-picture" style="width: 100px; height: 130px;"></div>
               <div class="upload">
                  <label for="main_image" class="required">Main Picture</label><br/>
                  <div class="commit-button sticky-left">
                     <label for="main_image" class="inner-blue box-shadow">SELECT FILE</label>
                     <input id="main_image" name="main_image" type="file" accept="image/png, image/jpg, image/jpeg" required></input>
                  </div><br/><br/><span id="main_text" style="color: rgb(100, 100, 100); font-size: .8rem;">Upload your image.</span>
               </div>
            </div>
            <span>Additional pictures</span>
            <div class="commit-button" style="margin: 1rem 0 0 1rem;">
               <label for="additional_image" class="inner-blue box-shadow">SELECT MULTIPLE FILES</label>
               <input id="additional_image" name="additional_image[]" type="file" accept="image/png, image/jpg, image/jpeg" multiple></input>
            </div><br/><br/><span id="additional_text" style="color: rgb(100, 100, 100); font-size: .8rem;">PNG, JPG, JPEG</span>
         </div>
         <p style="font-size: 15px; margin-top: 2rem;">ADDITIONAL</p>
         <div class="indent-box">
            <label for="description"></label>
            <div style="background-color: rgb(40, 40, 140); padding-left: 1rem;">
               <textarea name="description" id="description" cols="30" rows="5" class="box-shadow" maxlength="100"></textarea>
            </div>
         </div>
         <div class="commit-button sticky-left" style="margin: 2rem 0;">
            <label for="save" class="outer-blue" style="padding: .8rem 2rem;">SUBMIT</label>
            <input id="save" type="submit"></input>
         </div>
      </form>
   </div>
</body>
</html>