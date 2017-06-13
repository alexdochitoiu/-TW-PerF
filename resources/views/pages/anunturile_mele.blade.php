@extends('layouts.master')

@section('title')
    Anunturile mele
@endsection

@section('content')
<style>
    .deleteBtn {
        margin-top: 25px;
        margin-bottom: -35px;
        border: 1px solid black;
        background: #606060;
        width: 25px;
        margin-left: auto;
        margin-right: 20px;
        color: #ff6666;
        font-size: 15px;
        text-align: center;
        padding: auto;
    }
</style>
<div class="container">
    <div class="row">
        @if(isset($anunturi))
        @foreach($anunturi as $anunt)
        <div class="col-xs-6 col-sm-4">
            <a href="anunturile_mele/sterge/{{$anunt->id}}"><div class="deleteBtn"> X  </div></a>
            <a href="/anunturi/{{$anunt->id}}" >
                <div class="announcement">
                    <div> <span>PRET</span> {{$anunt->pret}} RON</div>
                    <img src="{{$anunt->imagine_prezentare}}" alt="house"/>
                    <p id="title"> {{$anunt->titlu}}</p>
                    <p id="uploadedBy">Adaugat de {{ $anunt->name }}</p>
                    <p id="timeAdded">{{$anunt->created_at}}</p>
                </div>
            </a>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection