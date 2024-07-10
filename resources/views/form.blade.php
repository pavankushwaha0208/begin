@extends('layouts.main')

<!-- Titel -->
@push('title')
    <title>login</title>
@endpush

<!-- main-section -->

@section('main-section')
    <!-- form -->

<div>
    <form action="{{url('/')}}/register" method="post">
        @csrf
    <h3 class=" text-center text-secondary">Registration</h3>
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input
            type="text"
            name="name"
            id=""
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
        <!-- <small id="helpId" class="text-muted">Help text</small> -->
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input
            type="email"
            name="email"
            id=""
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
        <!-- <small id="helpId" class="text-muted">Help text</small> -->
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Password</label>
        <input
            type="password"
            name="password"
            id=""
            class="form-control"
            placeholder=""
            aria-describedby="helpId"
        />
        <!-- <small id="helpId" class="text-muted">Help text</small> -->
    </div>

    <button
        type="submit"
        class="btn btn-primary"
    >
        Submit
    </button>
    </form>
</div>


@endsection