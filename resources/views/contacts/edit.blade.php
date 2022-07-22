@extends('layouts.main')

@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Update Contact</strong>
                        </div>
                        <div class="card-body">
                            <form action = "{{route('contacts.update',$contact->id)}}" method = "POST" >
                                @csrf
                                @method('PUT')
                                @include('contacts._form')
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
