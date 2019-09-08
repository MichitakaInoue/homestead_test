@extends('layouts.app')

{{-- floatとかそれぞれの --}}

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark">
                       <h3 class="mt-1 mb-1 text-white" style="float:left;">ケース〇</h3>
                    　　<a class="" href="route{{'caseIndex'}}" style="float:right;"><button class="btn btn-primary">変更せず一覧に戻る</button></a>
                    </div>
                    <div class="card-body pt-5 pb-5">
                        <form method="POST" action="">
                            @csrf
                            <div class="mb-3" style="min-height:60px;">
                                <h3 class="mt-1 mb-1" style="float:left;">資料</h3>
                                <div class="col-10" style="float:right">
                                    <a class="ml-2 mr-2" href="" ><button class="btn btn-primary" style="width:25%;">資料1</button></a> 
                                    <a class="ml-2 mr-2" href="" ><button class="btn btn-primary" style="width:25%;">資料2</button></a> 
                                    <a class="ml-2 mr-2" href="" ><button class="btn btn-primary" style="width:25%;">資料3</button></a>                     
                                </div>                         
                            </div>
                            <div class="mb-3" style="min-height:60px;">
                                <h3 class="mt-1 mb-1" style="float:left;">判定</h3>
                                <div class="col-10" style="float:right">
                                    <a class="ml-2 mr-2" href="" ><button class="btn btn-primary" style="width:25%;">〇</button></a> 
                                    <a class="ml-2 mr-boo2" href="" ><button class="btn btn-primary" style="width:25%;">☓</button></a> 
                                    <a class="ml-2 mr-2" href="" ><button class="btn btn-primary" style="width:25%;">△</button></a>                     
                                </div>            
                            </div>
                            <div class="mb-5" style="min-height:250px;">
                                <h3 class="mt-1 mb-1" style="float:left;">コメント</h3>
                                <div class="col-10" style="float:right">
                                   <textarea class="d-block col-10 p-3" name="" id="" cols="30" rows="10"></textarea>
                                </div>            
                            </div>
                            <div class="col-3 mx-auto mt-3">
                               <button type="button" class="btn btn-primary btn-lg" style="width:100%;">保存する</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- <section class="border col-6 mx-auto border" style="padding: 0;">
    <div class="card-header toggle-mark" id="search-header">

    </div>
    <form class="p-3">
        <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
        </div>
        </div>
        <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        </div>
    </form>
</section> --}}
@endsection

