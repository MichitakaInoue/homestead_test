@extends('layouts.app')


@section('content')
<form method="POST" action="{{route('judges.new')}}"  class="col-6 mx-auto">
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">名前</label>
      <div class="col-sm-10 form-inline">
        <label>姓</label><input type="text" class="form-control" />&nbsp;
        <label>名</label><input type="text" class="form-control" />
      </div>
    </div>
    <div class="form-group row">
      <label for="number" class="col-sm-2 col-form-label">グループ</label>
      <div class="col-sm-10">
          <select class="form-control" id="number" name="number">
            <option value="" selected="selected">選択してください</option>
            <option value="1">火曜日</option>
            <option value="2">水曜日</option>
            <option value="3">金曜日</option>
          </select>
      </div> 
    </div>
    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label">ID</label>
      <div class="col-sm-10">
        <input type="password" name="judges_id" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="judges_pass" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <button type="button" class="btn btn-primary btn-lg">登録する</button>
</form>
@endsection