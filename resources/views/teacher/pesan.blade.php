@extends('components.template_teacher')

@section('title', "Pesan")
@section('mainContainer')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3>Komentar</h3>
                @foreach ($comments as $comment)
                    <div class="card mb-2">
                        <div class="card-body">
                            <strong>{{ $comment->user->name }}</strong>
                            <p>{{ $comment->message }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection