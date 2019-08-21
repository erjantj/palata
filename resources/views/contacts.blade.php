@extends('layouts.main')

@section('title', $page->title)

@section('content')
<div class="row">
  <div class="col-md-12 col-xs-12">
    <h1>@yield('title')</h1>
    <p>{!! $page->body !!}</p>
  </div>
  <div class="col-md-6 col-xs-12">
     <div id="map"></div>
     <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          var uluru = {lat: {{ $coordinates['lat'] }}, lng: {{ $coordinates['lng'] }} };
          // The map, centered at Uluru
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 15, center: uluru});
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: uluru, map: map});
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCzzApJ4AOdW1On0O6DdcIxJDSF7tAATE&callback=initMap">
      </script>
  </div>
  <div class="contact-consult col-md-6 col-xs-12">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <address>
            <p class="label-title">{{ __('messages.address') }}</p>
            <p>{!! $contact->address !!}</p>
        </address>
      </div>
      <div class="col-md-6 col-xs-12">
        <address>
            <p class="label-title">{{ __('messages.phone_number') }}</p>
            <p>{!! $contact->phone_number_full !!}</p>
        </address>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <address>
            <p class="label-title">{{ __('messages.email') }}</p>
            <p><a href="emailto:{{ $contact->email }}"> {{ $contact->email }} </a></p>
        </address>
      </div>
    </div>
  </div>
</div>
@endsection
