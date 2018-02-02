@extends('layouts.app')

@section('title')
Kaip rasti
@endsection

<style>
.map-conf{
    position: relative;
    padding-bottom: 25%; // This is the aspect ratio
    height: 0;
    overflow: hidden;
}
.map-conf iframe{
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
}

.map-border{
    border-top-style:solid;
    border-color:#7a7a7a;
}
</style>

@section('content')

<h1>Mus galite rasti:</h1>

    <div class="map-border">
        <div class="map-loc col-md-3">
            <h3>Uknown location, somewhere in the desert</h3>
        </div>

        <div class="map-conf">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1719014.6364289063!2d-3.6131042998379006!3d32.70065583867308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9b4a8f90e8bd45%3A0x239039acb4c2390c!2sFiguig+Province%2C+Marokas!5e0!3m2!1slt!2slt!4v1517574457044" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

@endsection
