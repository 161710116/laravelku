@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home') }}">Dashboard</a></li>
            </ul>
            <ul class="breadcrumb">
                <li><a href="{{ url('/admin/books') }}">Buku</a></li>
            </ul>
            <ul class="breadcrumb">
                <li class="active">Ubah Buku</li>
            </ul>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Ubah Buku</h2>
                </div>

                <div class="panel-body">
                    {!! Form::model($book, ['url' => route('books.update', $book->id),
                        'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('books._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
