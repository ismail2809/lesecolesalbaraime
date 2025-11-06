@extends('layouts.master')   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style> 
.reload {
    font-family: Lucida Sans Unicode
}
</style>

@section('title', "Contactez-nous")

@section('content')

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
	    <div class="row">
	      <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
	        <h2 class="fs-15 text-uppercase text-muted mb-3">Contactez-nous</h2>
	        <h3 class="display-4 mb-10">Vous avez <mark>des questions</mark> ?</h3>
	      </div> 
	    </div> 
    
  <!-- /.container --> 
	    <div class="row">
	      <div class="col-xl-10 mx-auto">
	        <div class="row gy-10 gx-lg-8 gx-xl-12 mb-3">
	          <div class="col-lg-8">
	            <form method="post" action="{{ url('/contact_form') }}">
	              @csrf 
	              <div class="row gx-4">
	                <div class="col-md-6">
	                  <div class="form-floating mb-4">
	                    <input id="form_name" type="text" name="prenom" class="form-control" placeholder="Adam" required>
	                    <label for="form_name">Prénom *</label> 
	                    @error('message')
	                    <p class="text-red">
	                      Entrer votre Prénom.
	                    </p>
	                    @enderror
	                  </div>
	                </div>
	                <!-- /column -->
	                <div class="col-md-6">
	                  <div class="form-floating mb-4">
	                    <input id="form_nom" type="text" name="nom" class="form-control" placeholder="Mohamed" required>
	                    <label for="form_nom">Nom *</label>	                    
	                    @error('message')
	                    <p class="text-red">
	                      Entrer votre Nom.
	                    </p>
	                    @enderror
	                  </div>
	                </div>
	                <!-- /column -->
	                <div class="col-md-6">
	                  <div class="form-floating mb-4">
	                    <input id="form_email" type="email" name="email" class="form-control" placeholder="palmeraie@email.com" required>
	                    <label for="form_email">Email *</label>	                    
	                    @error('message')
	                    <p class="text-red">
	                      Entrer votre adresse email valide.
	                    </p>
	                    @enderror
	                  </div>
	                </div> 
	                <!-- /column -->
	                <div class="col-md-6">
	                  <div class="form-floating mb-4">
	                    <input id="form_tel" type="tel" name="tel" class="form-control" placeholder="06 77 66 55 44" required>
	                    <label for="form_tel">Téléphone *</label>	                    
	                    @error('message')
	                    <p class="text-red">
	                      Entrer votre Téléphone.
	                    </p>
	                    @enderror
	                  </div>
	                </div>
	                <!-- /column -->
	                <div class="col-12">
	                  <div class="form-floating mb-4">
	                    <textarea id="form_message" name="message" class="form-control" placeholder="Votre message" style="height: 150px" required></textarea>
	                    <label for="form_message">Message *</label>	                    
	                    @error('message')
	                    <p class="text-red">
	                      Entrer votre messsage.
	                    </p>
	                    @enderror
	                  </div>
	                </div>
	                <!-- /column -->
	                <div class="col-12">
	                  	<div class="form-group mt-4 mb-4">
			                <div class="captcha">
			                    <span>{!! captcha_img() !!}</span>
			                    <button type="button" class="btn btn-danger" class="reload" id="reload">
			                        &#x21bb;
			                    </button>
			                </div>
			            </div>
			            <div class="form-group mb-4">
			                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
			            </div>
			            @error('captcha')
	                    <p class="text-red">
	                       Essayer à nouveau, Votre captcha incorrecte.
	                    </p>
	                    @enderror
	                </div>
	                <!-- /column -->
	                <div class="col-12">
	                  	<input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message"> 
	                </div>
	                <!-- /column -->
	              </div>
	              <!-- /.row -->
	            </form>
	            <!-- /form -->
	          </div>
	          <!--/column -->
	          <div class="col-lg-4">
	            <div class="d-flex flex-row">
	              <div>
	                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
	              </div>
	              <div>
	                <h5 class="mb-1">Adresse</h5>
	                <address>Bvd Med V, BP : 14, Azemmour, 24100, Maroc</address>
	              </div>
	            </div>
	            <div class="d-flex flex-row">
	              <div>
	                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
	              </div>
	              <div>
	                <h5 class="mb-1">Téléphone</h5>
	                <p><a href="tel:0522238438">05 22 23 84 38</a></p>
	              </div>
	            </div>
	            <div class="d-flex flex-row">
	              <div>
	                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
	              </div>
	              <div>
	                <h5 class="mb-1">E-mail</h5>
	                <p class="mb-0"><a href="mailto:albaraime.viescholaire@gmail.com" class="text-body">albaraime.viescholaire@gmail.com</a></p>
	              </div>
	            </div>
	          </div>
	          <!--/column -->
	        </div>
			  
			<div class="row">
				<div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center"> 
			        <h3 class="display-4 mb-3">Notre localisation</h3>
			    </div> 
	        	<div class="col-lg-12 align-self-stretch">
	              <div class="map map-full rounded-top rounded-lg-start"> 
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3335.405396909031!2d-8.35919752454043!3d33.28205567345678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda8e594be4809f5%3A0x59da0d1e22eda13!2zTGVzIMOJY29sZXMgQWxiYXJhaW1lIFByaXbDqWUgOiBQcsOpc2NvbGFpcmUsIFByaW1haXJlLCBDb2xsw6hnZSAmIEx5Y8OpZQ!5e0!3m2!1sfr!2sma!4v1727198977397!5m2!1sfr!2sma"  style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
	              </div> 
	            </div>
            </div>

	      </div>
	    </div>

 
  </div>
  <!-- /.container -->
</section>

<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>

@endsection