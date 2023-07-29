
<style>
    a{
        text-decoration:none!important
    }
    
</style>
@include('layouts.header')
@extends('layouts.app')


<section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-4">
                        <div class="contact-one__content">
                        <div class="block-title">
                              <!-- /.block-title__image -->
                             
                                <h3>Secured Signin</h3>
                            </div><!-- /.block-title -->
                           
                            <div class="contact-one__summery">
                            <p>Don't miss out on all the amazing features</p>

                            </div><!-- /.contact-one__summery -->
                          
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-sm-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                   
                    
                        <form  method="POST" action="{{ route('login') }}" class="contact-one__for contact-form-validate">
                        @csrf
                            <div class="row mb-3">
                                <div class="col-lg-12 mb-3">
                                <input  style="height: 60px" placeholder="Enter Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12 mb-3 ">
                                <input style="height: 60px" placeholder="Enter password" id="password" type="password" class=" form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback form-control" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div><!-- /.col-lg-6 -->
                                
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">  {{ __('Login') }}</button><!-- /.thm-btn -->


                                    
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->

                            <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <a href="register">
                                <span>Don't have Account? </span>
                              <button type="button"  class="btn btn-link">
                                    {{ __('Register') }}
                                </button>
                              </a>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        </form>
                    </div><!-- /.col-sm-12 col-md-6 col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

@include('layouts.footer')