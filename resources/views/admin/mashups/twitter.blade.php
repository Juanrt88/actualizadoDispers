@extends('admin.system.admin')
@section('titulo','Tweets de la tienda')
@section('breadcrumb')
  <li class="breadcrumb-item active">Mashup de Twitter</li>
@endsection
@section('contenido')



<a class="twitter-timeline" data-lang="es" data-height="600" data-theme="light" href="https://twitter.com/DispersStore?ref_src=twsrc%5Etfw">Tweets by DispersStore</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

@endsection