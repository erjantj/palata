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
          var map = new google.maps.Map( document.getElementById('map'), {
            zoom: 15, 
            center: uluru,
            styles: [
                      {
                        "elementType": "geometry"
                        , "stylers": [
                          {
                            "color": "#f5f5f5"
                  }
                ]
              }
                                , {
                        "elementType": "labels.icon"
                        , "stylers": [
                          {
                            "visibility": "off"
                  }
                ]
              }
                                , {
                        "elementType": "labels.text.fill"
                        , "stylers": [
                          {
                            "color": "#616161"
                  }
                ]
              }
                                , {
                        "elementType": "labels.text.stroke"
                        , "stylers": [
                          {
                            "color": "#f5f5f5"
                  }
                ]
              }
                                , {
                        "featureType": "administrative.land_parcel"
                        , "elementType": "labels.text.fill"
                        , "stylers": [
                          {
                            "color": "#bdbdbd"
                  }
                ]
              }
                                , {
                        "featureType": "poi"
                        , "elementType": "geometry"
                        , "stylers": [
                          {
                            "color": "#eeeeee"
                  }
                ]
              }
                                , {
                        "featureType": "poi"
                        , "elementType": "labels.text.fill"
                        , "stylers": [
                          {
                            "color": "#757575"
                  }
                ]
              }
                                , {
                        "featureType": "poi.park"
                        , "elementType": "geometry"
                        , "stylers": [
                          {
                            "color": "#e5e5e5"
                  }
                ]
              }
                                , {
                        "featureType": "poi.park"
                        , "elementType": "labels.text.fill"
                        , "stylers": [
                          {
                            "color": "#9e9e9e"
                  }
                ]
              }
                                , {
                        "featureType": "road"
                        , "elementType": "geometry"
                        , "stylers": [
                          {
                            "color": "#ffffff"
                  }
                ]
              }
                                , {
                        "featureType": "road.arterial"
                        , "elementType": "labels.text.fill"
                        , "stylers": [
                          {
                            "color": "#757575"
                  }
                ]
              }
                                , {
                        "featureType": "road.highway"
                        , "elementType": "geometry"
                        , "stylers": [
                          {
                            "color": "#dadada"
                  }
                ]
              }
                                , {
                        "featureType": "road.highway"
                        , "elementType": "labels.text.fill"
                        , "stylers": [
                          {
                            "color": "#616161"
                  }
                ]
              }
                                , {
                        "featureType": "road.local"
                        , "elementType": "labels.text.fill"
                        , "stylers": [
                          {
                            "color": "#9e9e9e"
                  }
                ]
              }
                                , {
                        "featureType": "transit.line"
                        , "elementType": "geometry"
                        , "stylers": [
                          {
                            "color": "#e5e5e5"
                  }
                ]
              }
                                , {
                        "featureType": "transit.station"
                        , "elementType": "geometry"
                        , "stylers": [
                          {
                            "color": "#eeeeee"
                  }
                ]
              }
                                , {
                        "featureType": "water"
                        , "elementType": "geometry"
                        , "stylers": [
                          {
                            "color": "#4BBFEE"
                  }
                ]
              }
                                , {
                        "featureType": "water"
                        , "elementType": "labels.text.fill"
                        , "stylers": [
                          {
                            "color": "#9e9e9e"
                  }
                ]
              }
            ]
          });
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: uluru, map: map});
        }
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
    <div class="row">
      <div class="col-md-12 col-xs-12">
        @component('_callback')
        @endcomponent
      </div>
    </div>
  </div>
</div>
@endsection
