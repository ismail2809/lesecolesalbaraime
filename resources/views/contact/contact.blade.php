@extends('layout.master')
@section('title', "Contactez-nous")

@section('content')
<main class="main">

<!-- breadcrumb -->
<div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
    <div class="container">
        <h2 class="breadcrumb-title">Contactez-nous</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active">Contactez-nous</li>
        </ul>
    </div>
</div>
<!-- breadcrumb end -->


<!-- contact area -->
<div class="contact-area py-120">
    <div class="container">
        <div class="contact-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-map-location-dot"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5>Adresse</h5>
                            <p>
                                <a href="{{$setting->adresse1_map}}" target="_blank" rel="noopener noreferrer">
                                {{$setting->adresse1}}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-phone-volume"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5>Contact</h5>
                            <p><a href="tel:{{$setting->tel1}}">{{$setting->tel1}}</a></p>
                            <p><a href="tel:{{$setting->tel2}}">{{$setting->tel2}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-info-icon">
                            <i class="fal fa-envelopes"></i>
                        </div>
                        <div class="contact-info-content">
                            <h5>Email</h5>
                            <p><a href="email:{{$setting->email}}" class="__cf_email__">{{$setting->email}}</a></p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-img">
                        <img src="{{ asset('assets/img/contact/01.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="contact-form">
                        <div class="contact-form-header">
                            <h2 class="text-center">Vous avez des questions ?</h2>
                            <p class="text-center">Contactez-nous !</p>
                        </div>
                        <form method="post" action="{{ url('/form_contact') }}" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Votre Nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Votre Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject"
                                    placeholder="Votre Sujet" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" cols="30" rows="5" class="form-control"
                                    placeholder="Écrivez votre message"></textarea>
                            </div>
                            <button type="submit" class="theme-btn">Envoyer
                                Message <i class="far fa-paper-plane"></i></button>
                            <div class="col-md-12 mt-3">
                                <div class="form-messege text-success"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact area -->

<!-- map -->
<div class="contact-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6670.81076886152!2d-8.356623!3d33.282056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda8e594be4809f5%3A0x59da0d1e22eda13!2zTGVzIMOJY29sZXMgQWxiYXJhaW1lIFByaXbDqWUgOiBQcsOpc2NvbGFpcmUsIFByaW1haXJlLCBDb2xsw6hnZSAmIEx5Y8OpZQ!5e0!3m2!1sfr!2sma!4v1731278610428!5m2!1sfr!2sma" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
</div>

</main>
@endsection

