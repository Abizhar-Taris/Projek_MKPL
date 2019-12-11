@extends('layout/main')

@section('title', 'ABOUT')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                    <h1>Detail Mahasiswa</h1>

                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">{{$student->nama}}</h5>
                              <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                              <p class="card-text">{{$student->email}}</p>
                              <p class="card-text">{{$student->jurusan}}</p>

                              <a href="/students/{{ $student->id }}/edit" class="btn btn-primary">Edit</a>

                              <form action="{{ $student -> id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="subumit" class="btn btn-danger">Delete</button>
                              </form>
                              
                              <a href="/students" class="card-link">Kembali</a>
                            </div>
                          </div>
            </div>
        </div>
    </div>
@endsection