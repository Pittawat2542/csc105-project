@extends('static.layouts.app-dashboard')

@section('content')

   <section id="dashboard" class="router-table centered-size mb-5">
      <div class="router-title">DASHBOARD</div>

      <div class="router-tabs indent-box">
         <div class="router-item" data-target="#my_ver">VERIFICATION REQUESTS</div>
         <div class="router-item" data-target="#my_use">USERS</div>
         <div class="router-item" data-target="#my_ann">ANNOUNCEMENTS</div>
      </div>

      <div class="router-display">


         <div id="my_ver" class="router-content">
               <div class="right-para sticky-left">
                  <div class="search-bar">
                     <span style="display: inline-block; transform: rotateY(180deg); font-size: 2rem;">&#8981;</span>
                     <input id="ver_filter" name="ver_filter" type="text">
                  </div>
               </div>
               <div class="data-list">
                  <div class="data-spanner" data-span="false"></div>
   
                  <!-- provide each data here --> <!-- my requested list -->
                  <div class="user-box">
                     <div class="data-box box-shadow">
                        <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                        <div class="name-detail">
                           <span>Firstname Lastname</span><br/>
                           <span>Registered Date: 01/01/2001</span>
                        </div>
                        <div class="button-action">
                           <div class="simple-button box-shadow outer-red">&#10006;&nbsp;REJECT</div>
                           <div class="simple-button box-shadow outer-blue">&#9745;&nbsp;APPROVE</div>
                        </div>
                     </div>
                     <div class="other-detail-box box-shadow" data-span="true">
                        <div class="other-profile" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                        <div class="other-information">
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, quasi!
                        </div>
                     </div>
                  </div>
                  <div class="user-box">
                     <div class="data-box box-shadow">
                        <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                        <div class="name-detail">
                           <span>Firstname Lastname</span><br/>
                           <span>Registered Date: 01/01/2001</span>
                        </div>
                        <div class="button-action">
                           <div class="simple-button box-shadow outer-red">&#10006;&nbsp;REJECT</div>
                           <div class="simple-button box-shadow outer-blue">&#9745;&nbsp;APPROVE</div>
                        </div>
                     </div>
                     <div class="other-detail-box box-shadow" data-span="false">
                        <div class="other-profile" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                        <div class="other-information">
                           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, quasi!
                        </div>
                     </div>
                  </div>
                  <div class="user-box">
                        <div class="data-box box-shadow">
                           <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                           <div class="name-detail">
                              <span>Firstname Lastname</span><br/>
                              <span>Registered Date: 01/01/2001</span>
                           </div>
                           <div class="button-action">
                              <div class="simple-button box-shadow outer-red">&#10006;&nbsp;REJECT</div>
                              <div class="simple-button box-shadow outer-blue">&#9745;&nbsp;APPROVE</div>
                           </div>
                        </div>
                        <div class="other-detail-box box-shadow" data-span="false">
                           <div class="other-profile" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                           <div class="other-information">
                              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, quasi!
                           </div>
                        </div>
                     </div>
                     <div class="user-box">
                           <div class="data-box box-shadow">
                              <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                              <div class="name-detail">
                                 <span>Firstname Lastname</span><br/>
                                 <span>Registered Date: 01/01/2001</span>
                              </div>
                              <div class="button-action">
                                 <div class="simple-button box-shadow outer-red">&#10006;&nbsp;REJECT</div>
                                 <div class="simple-button box-shadow outer-blue">&#9745;&nbsp;APPROVE</div>
                              </div>
                           </div>
                           <div class="other-detail-box box-shadow" data-span="false">
                              <div class="other-profile" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                              <div class="other-information">
                                 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, quasi!
                              </div>
                           </div>
                        </div>
               </div>
         </div>


         <div id="my_use" class="router-content">
            <!-- check user's information from here -->
            <div class="right-para sticky-left">
               <div class="search-bar">
                  <span style="display: inline-block; transform: rotateY(180deg); font-size: 2rem;">&#8981;</span>
                  <input id="use_filter" name="use_filter" type="text">
               </div>
               <div class="anchor-button">
                  <a href="#" target="_blank">ADD NEW</a><!-- link to... -->
               </div>
            </div>
            <div class="data-list">
               <div class="data-spanner" data-span="false"></div>

               <!-- our users -->
               <div class="data-box box-shadow">
                  <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                  <div class="name-detail">
                     <span>Firstname Lastname</span><br/>
                     <span>Registered Date: 01/01/2001</span>
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
                     <span>Firstname Lastname</span><br/>
                     <span>Registered Date: 01/01/2001</span>
                  </div>
                  <div class="button-action">
                     <div class="simple-button box-shadow danger">&#128221;&nbsp;EDIT</div>
                     <div class="simple-button box-shadow danger">&#128465;&nbsp;DELETE</div>
                  </div>
               </div>

               <div class="data-box box-shadow">
                  <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                  <div class="name-detail">
                     <span>Firstname Lastname</span><br/>
                     <span>Registered Date: 01/01/2001</span>
                  </div>
                  <div class="button-action">
                     <div class="simple-button box-shadow danger">&#128221;&nbsp;EDIT</div>
                     <div class="simple-button box-shadow danger">&#128465;&nbsp;DELETE</div>
                  </div>
               </div>

               <div class="data-box box-shadow">
                  <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
                  <div class="name-detail">
                     <span>Firstname Lastname</span><br/>
                     <span>Registered Date: 01/01/2001</span>
                  </div>
                  <div class="button-action">
                     <div class="simple-button box-shadow danger">&#128221;&nbsp;EDIT</div>
                     <div class="simple-button box-shadow danger">&#128465;&nbsp;DELETE</div>
                  </div>
               </div>
               <!-- end repeating -->

            </div>

         </div>
         <div id="my_ann" class="router-content">
            <!-- Manage user's announcement -->

            <div class="right-para sticky-left">
               <div class="search-bar">
                  <span style="display: inline-block; transform: rotateY(180deg); font-size: 2rem;">&#8981;</span>
                  <input id="ann_filter" name="ann_filter" type="text">
               </div>
               <div class="anchor-button">
                  <a href="/static/announcement/create" target="_blank">ADD NEW</a><!-- link to create new announcement -->
               </div>
            </div>

            <div class="data-box box-shadow">
               <div class="picture" style="background-image: url('https://bit.ly/1KUXdA3');"></div>
               <div class="name-detail">
                  <span>PUPPY NAME</span><br/>
                  <span>by username</span>
               </div>
               <div class="button-action">
                  <div class="simple-button box-shadow danger">&#128221;&nbsp;EDIT</div>
                  <div class="simple-button box-shadow danger">&#128465;&nbsp;DELETE</div>
               </div>
            </div>
         </div>
      </div>
   </section>

@endsection
