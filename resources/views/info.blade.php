@extends('layouts.app')
@section('title')
    CHINFOOD INFO
@endsection

@section('content')
    <div class="container d-flex mt-5">
        <audio src="../img/info/13.01.mp3" controls></audio>
        <audio src="../img/info/file_example_OOG_1MG.ogg" class=" ml-auto mr-auto" controls></audio>
        <audio src="../img/info/file_example_WAV_1MG.wav" class=" ml-auto mr-auto" controls></audio>
    </div>
    <div class="container d-flex mt-5">
        <video  width="320" height="240" src="../img/info/file_example_MOV_480_700kB.mov" controls autoplay></video>
        <video  width="320" height="240" src="../img/info/file_example_MP4_480_1_5MG (1).mp4"class=" ml-auto mr-auto" controls autoplay></video>
        <video  width="320" height="240" src="../img/info/file_example_WEBM_480_900KB.webm" class=" ml-auto mr-auto" controls autoplay></video>
    </div>
@endsection
