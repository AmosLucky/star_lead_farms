
@php
$ref = "";
if(isset($_GET['ref'])){
    $ref = $_GET['ref'];
}

@endphp


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
                             
                                <h3>Secured Signup</h3>
                            </div><!-- /.block-title -->
                           
                            <div class="contact-one__summery">
                            <p>Don't miss out on all the amazing features</p>

                            </div><!-- /.contact-one__summery -->
                          
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-sm-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                   
                    
                        <form  method="POST" action="{{ route('register') }}" class="contact-one__for contact-form-validate">
                        @csrf
                       
                            <div class="row mb-3">
                            <div class="col-lg-12 mb-3">
                                <input   placeholder="Enter full name" id="name" type="text" class="input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.col-lg-6 -->

                           
                            <div class="col-lg-12 mb-3">
                                <input   placeholder="Enter username" id="username" type="text" class="input form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-12 mb-3">
                                <input   placeholder="Enter Email" id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-12 mb-3">
                                <input   placeholder="Enter phone number" id="phone" type="text" class="input form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-12 mb-3">
                                <input   placeholder="Enter referrer id" id="referrer" type="text" class="input form-control @error('referrer') is-invalid @enderror" name="referrer" value="{{ $ref }}"  autocomplete="referrer" autofocus>
                                    @error('referrer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-12 mb-3 ">
                                <input  placeholder="Enter password" id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback form-control" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-12 mb-3 ">
                                <input  placeholder="Confirm password" id="password" type="password" class="input form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback form-control" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><!-- /.col-lg-6 -->
                            
                                
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">  {{ __('Register') }}</button><!-- /.thm-btn -->


                                    
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->

                            <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                              <a href="login">
                                <span>Already have an account? </span>
                              <button type="button"  class="btn btn-link">
                                    {{ __('Login') }}
                                </button>
                              </a>

                              
                            </div>
                        </div>
                        </form>
                    </div><!-- /.col-sm-12 col-md-6 col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

@include('layouts.footer')