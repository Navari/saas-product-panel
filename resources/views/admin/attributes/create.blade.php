@extends('layouts.master')
@section('content')
    @include('layouts.partials.breadcrumb', [ 'page_title' => 'Secenekler', 'actions' => [
        ['label' => 'Secenekleri Listele', 'url' => route('admin.attributes.index')]
    ]])

@endsection
