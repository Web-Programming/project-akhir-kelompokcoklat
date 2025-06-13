@extends('layouts.master')

@section('title', 'Contact Us - ChocoLux')

@section('content')
<!-- Contact Section -->
<section class="contact_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
                <div class="form_container">
                    <div class="heading_container">
                        <h2>Contact Us</h2>
                    </div>

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text"
                                   name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Full Name"
                                   value="{{ old('name') }}"
                                   required />
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text"
                                   name="phone"
                                   class="form-control @error('phone') is-invalid @enderror"
                                   placeholder="Phone number"
                                   value="{{ old('phone') }}"
                                   required />
                            @error('phone')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="email"
                                   name="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   placeholder="Email"
                                   value="{{ old('email') }}"
                                   required />
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <textarea name="message"
                                      class="form-control message-box @error('message') is-invalid @enderror"
                                      placeholder="Message"
                                      required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex">
                            <button type="submit" class="btn-send">
                                SEND NOW
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_api_key') }}"></script>
<script>
function initMap() {
    const chocoluxLocation = {
        lat: -6.2088, // Ganti dengan latitude lokasi Anda
        lng: 106.8456 // Ganti dengan longitude lokasi Anda
    };

    const map = new google.maps.Map(document.getElementById("googleMap"), {
        zoom: 15,
        center: chocoluxLocation,
    });

    const marker = new google.maps.Marker({
        position: chocoluxLocation,
        map: map,
        title: "ChocoLux"
    });
}

document.addEventListener('DOMContentLoaded', initMap);
</script>
@endsection
