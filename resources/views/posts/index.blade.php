@extends('admin.dashboard')

@section('titulo', 'Posts Apemesp/Jomesp')



@section('conteudo')

<div class="row">

<div class="col-lg-4 col-md-4">
</div>
<div class="col-lg-4 col-md-4">
  <a class="btn btn-block btn-info" href=" {{ url('/admin/posts/apemesp/list') }}">POSTS APEMESP</a>
  <br />
  <br />
  <br />
  <a class="btn btn-block btn-success" href=" {{ url('/admin/posts/jomesp/list') }}">POSTS JOMESP</a>
</div>
<div class="col-lg-4 col-md-4">
</div>

</div>


@endsection
