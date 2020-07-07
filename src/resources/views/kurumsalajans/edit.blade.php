@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kurumsal Ajans Create</div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST"  action="{{ route('kurumsalajans.update',$kurumsalajans->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="subjectId" class="col-sm-2 control-label">Subject</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="subjectId" name="subject" value="{{$kurumsalajans->subject}}"
                                    placeholder="Subject" ng-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">CreatedBy</label>
                            <div class="col-sm-12">
                                <select id="createdBy" name="createdBy" class="form-control"
                                    data-placeholder="Select a User" style="width: 100%;">
                                    <option value="{{ $kurumsalajans->createdBy }}">{{ $kurumsalajans->createdBy }}</option>
                                    @foreach($users as $user)
                                    <option value="{{$user->name}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">File</label>
                            <div class="col-sm-12">
                                <input type="file" name="fileName" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-6">
                                <button type="submit" class="btn btn-primary">
                                    Kaydet
                                </button>
                                <a href="{{ route('kurumsalajans.index') }}" class="btn btn-primary">Geri Al</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection