@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>
        <a href="{{ route('kurumsalajans.create')}}" class="btn btn-success btn-xs">
          KurumsalAjans Add
        </a>
        <div class="card-body">
          @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
          </div>
          @endif
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Subject</th>
                <th scope="col">CreatedBy</th>
                <th scope="col">FileName</th>
                <th scope="col">FilePath</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($kurumsalajanslar as $kurumsalajans)
              <tr>
                <th scope="row">{{$kurumsalajans->id}}</th>
                <th>{{$kurumsalajans->subject}}</td>
                <th>{{$kurumsalajans->createdBy}}</th>
                <th>{{$kurumsalajans->fileName}}</th>
                <th><img src="{{$kurumsalajans->filePath}}"></th>
                <th>
                  <form class="row" method="POST"
                    action="{{ route('kurumsalajans.destroy', $kurumsalajans->id) }}"
                    onsubmit="return confirm('Silmek İstiyor musunuz?')">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{ route('kurumsalajans.edit', $kurumsalajans->id) }}"
                      class="btn btn-secondary btn-xs">
                      Güncelle
                    </a>
                    <button type="submit" class="btn btn-danger btn-xs btn-delete">
                      Sil
                    </button>
                  </form>
                </th>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $kurumsalajanslar->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection