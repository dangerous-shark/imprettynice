@extends('layouts.app')
@section('content')
    {!! Form::open(['route' => 'berita.store']) !!}
        <div class="body m-10">
            <div class="form-group">
                {!! Form::label('judul','Judul'); !!}
                {!! Form::text('judul', '', ['class' => 'from-control', 'placeholder'=>'judul berita']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('isi','Isi'); !!}
                {!! Form::textarea('isi', '', ['class' => 'from-control', 'placeholder'=>'isi berita']) !!}
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="{!! route('') !!}" class="btn btn-danger">Cancel</a>
        </div>
    {!! Form::close() !!}
@endsection