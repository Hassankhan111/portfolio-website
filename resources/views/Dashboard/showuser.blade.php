@extends('dashboard.layout.app')

@section('containt')


<div class="container-fluid py-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mt-2 mb-0">
                Contact Message
            </h2>
        </div>

        <div>

            @if($data->status === 'unread')

            <span class="badge bg-warning text-dark px-3 py-2">
                Unread
            </span>

            @else

            <span class="badge bg-success px-3 py-2">
                Read
            </span>

            @endif

        </div>

    </div>


    <div class="row g-4">

        {{-- Main Message --}}
        <div class="col-lg-8">

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <div class="mb-4">

                        <small class="text-muted">
                            SUBJECT
                        </small>

                        <h4 class="fw-bold mt-1">
                            {{ $data->subject ?? 'No Subject' }}
                        </h4>

                    </div>

                    <hr>

                    <div class="mb-3">

                        <small class="text-muted">
                            MESSAGE
                        </small>

                    </div>

                    <div class="message-content">

                        {!! nl2br(e($data->message)) !!}

                    </div>

                    <hr class="my-4">

                    <div class="d-flex gap-2">

                        <a href="mailto:{{ $data->email }}" class="btn btn-primary">
                            <i class="bi bi-reply me-1"></i>
                            Reply
                        </a>

                        @if($data->status === 'unread')

                        <form method="POST" action="{{ route('contact.read', $data->id) }}">
                            @csrf
                            @method('PATCH')

                            <button class="btn btn-light border">
                                <i class="bi bi-check2 me-1"></i>
                                Mark as Read
                            </button>
                        </form>

                        @endif
                    </div>
                </div>
            </div>
            {{-- back to message --}}
            <div class="card border-0 shadow-sm mt-5">
                <div class="card-body">
                    <a href="/admin" class="btn btn-outline-success w-100">
                        <i class="bi bi-arrow-left me-1"></i>
                        Back to Messages
                    </a>
                </div>
            </div>
        </div>


        {{-- Visitor Information --}}
        <div class="col-lg-4">

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-white border-0 p-4">
                    <h5 class="fw-bold mb-0">
                        Visitor Information
                    </h5>
                </div>

                <div class="card-body pt-0 p-4">

                    <div class="mb-4">

                        <small class="text-muted d-block">
                            NAME
                        </small>

                        <strong>
                            {{ $data->name }}
                        </strong>

                    </div>


                    <div class="mb-4">

                        <small class="text-muted d-block">
                            EMAIL
                        </small>

                        <a href="mailto:{{ $data->email }}">
                            {{ $data->email }}
                        </a>

                    </div>


                    @if($data->phone)

                    <div class="mb-4">

                        <small class="text-muted d-block">
                            PHONE
                        </small>

                        <a href="tel:{{ $data->phone }}">
                            {{ $data->phone }}
                        </a>

                    </div>

                    @endif


                    <div class="mb-4">

                        <small class="text-muted d-block">
                            RECEIVED
                        </small>

                        <strong>
                            {{ $data->created_at->format('d M Y, h:i A') }}
                        </strong>

                    </div>


                    {{-- Custom Fields --}}
                    @if(isset($data->company))

                    <div class="mb-4">

                        <small class="text-muted d-block">
                            COMPANY
                        </small>

                        <strong>
                            {{ $data->company }}
                        </strong>

                    </div>

                    @endif


                    @if(isset($data->budget))

                    <div class="mb-4">

                        <small class="text-muted d-block">
                            BUDGET
                        </small>

                        <strong>
                            {{ $$data->budget }}
                        </strong>

                    </div>

                    @endif

                </div>

            </div>


            {{-- Delete --}}
            <div class="card border-0 shadow-sm mt-4">

                <div class="card-body">

                    <form method="POST" action="{{ route('delete-user', $data->id) }}"
                        onsubmit="return confirm('Are you sure you want to delete this message?')">
                        @method('Delete')
                        @csrf

                        <button class="btn btn-outline-danger w-100">
                            <i class="bi bi-trash me-1"></i>
                            Delete Message
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


@endsection