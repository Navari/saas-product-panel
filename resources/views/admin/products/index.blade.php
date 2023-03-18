@extends('layouts.master')
@section('content')
    @include('layouts.partials.breadcrumb', [ 'page_title' => 'Urunler', 'actions' => [
        ['label' => 'Urun Ekle', 'url' => route('admin.products.create')]
    ]])
@endsection
