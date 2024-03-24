@extends('layouts.template')
@section('title')
@section('content')
    @if(session('error'))
    <div class="error-div">
        <div id="errorMessage" class="alert alert-danger fadeOut">
            {{ session('error') }}
        </div>
    </div>
    @endif
    {{-- hero section --}}
    <div class="content-container"></div>
    {{-- introductions --}}
    <div class="intro container-fluid">
        <h1>Lorem Ipsum</h1>
        <div class="boxes container-fluid">
            <div>
                <h2>lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ducimus, magni tempora velit expedita, numquam, similique nemo ab eveniet at quam officia modi laborum itaque eius natus repellendus nisi! Ipsam fugit, incidunt, ad culpa inventore repudiandae non ducimus saepe pariatur excepturi accusamus, beatae a sed ex odio enim quisquam esse!</p>
            </div>
            <div>
                <h2>lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ducimus, magni tempora velit expedita, numquam, similique nemo ab eveniet at quam officia modi laborum itaque eius natus repellendus nisi! Ipsam fugit, incidunt, ad culpa inventore repudiandae non ducimus saepe pariatur excepturi accusamus, beatae a sed ex odio enim quisquam esse!</p>
            </div>
            <div>
                <h2>lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ducimus, magni tempora velit expedita, numquam, similique nemo ab eveniet at quam officia modi laborum itaque eius natus repellendus nisi! Ipsam fugit, incidunt, ad culpa inventore repudiandae non ducimus saepe pariatur excepturi accusamus, beatae a sed ex odio enim quisquam esse!</p>
            </div>
        </div>
    </div>
    {{-- mission and vision --}}
    <div class="m-v"></div>
    {{-- call to action like sign up with email --}}
    <div class="cta"></div>
    {{-- community reviews --}}
    <div class="com-rev"></div>
@endsection