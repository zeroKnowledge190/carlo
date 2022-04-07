<!-- Footer Section -->
<section id="Footer">
    <div class="pb-5 pt-4" style="	background-image: linear-gradient(to bottom, rgba(0,0,0,0.9), rgba(0,0,0,0.9));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"><img class="img-fluid d-block mx-auto" src="/carlo/assets/CARLO logo TOP BAR.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center text-white">carlo.web@info.com.ph</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-center text-white">Citizens Assistance Recording Listing Organization</h5>
                    <center>
                    <p> Copyright © 2021 CARLO, Inc. All rights reserved.</p>
                </center>
            </div>
        </div>
    </div>
 </div>
<div class="nav pull-right scroll-top">
    <a href="#navbar" id="scroll-top" style="display: inline;">
    <i class="fa fa-angle-up"></i></a>
</div>
</section>
<script src="/carlo/vendor/jquery/jquery.min.js"></script>
    <script scr="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
  	    <script scr="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  	        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
  	            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  	                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  	                            <script type="text/javascript" src="https://cookieconsent.popupsmart.com/src/js/popper.js"></script><script> window.start.init({Palette:"palette1",Mode:"floating left",Theme:"edgeless",Time:"5",})</script>
                                @include('r_layouts.rec_scripts.register_modal')
                                @include('fil_views.back_scripts.questions')
                            @include('fil_views.back_scripts.opinions')
                        @include('fil_views.back_scripts.requisitions')
                    @include('fil_views.back_scripts.petitions')
                @include('fil_views.back_scripts.applications')
            @include('fil_views.back_scripts.surveys')
        @include('r_layouts.rec_scripts.login_to_dashboard')
    </body>
</html>