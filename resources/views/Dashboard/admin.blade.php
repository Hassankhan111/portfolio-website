@extends('dashboard.layout.app')

@section('containt')

<div class="card border-0 shadow-lg mb-4">
    <div class="card-body">

        <form method="GET" action="">

            <div class="row g-4 align-items-end">

                {{-- Search --}}
                <div class="col-lg-5">
                    <label class="form-label fw-semibold">
                        Search
                    </label>

                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="bi bi-search"></i>
                        </span>

                        <input type="text" name="search" class="form-control"
                            placeholder="Search name, email or subject..." value="{{ request('search') }}">
                    </div>
                </div>


                {{-- Status --}}
                <div class="col-lg-3">
                    <label class="form-label fw-semibold">
                        Status
                    </label>

                    <select name="status" class="form-select">
                        <option value="">
                            All Messages
                        </option>

                        <option value="unread" {{ request('status') === 'unread' ? 'selected' : '' }}>
                            Unread
                        </option>

                        <option value="read" {{ request('status') === 'read' ? 'selected' : '' }}>
                            Read
                        </option>
                    </select>
                </div>


                {{-- Buttons --}}
                <div class="col-lg-4">

                    <div class="d-flex gap-2">

                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-funnel me-1"></i>
                            Filter
                        </button>

                        <a href="" class="btn btn-light border">
                            <i class="bi bi-arrow-counterclockwise me-1"></i>
                            Reset
                        </a>

                    </div>

                </div>

            </div>

        </form>

    </div>
</div>



{{-- Messages Table --}}
<div class="card border-0 shadow-sm">

    <div class="card-header bg-white border-0 py-3">
        <div class="d-flex justify-content-between align-items-center">

            <div>
                <h5 class="fw-bold mb-0">
                    Messages
                </h5>

                <small class="text-muted">
                    Visitor contact submissions
                </small>
            </div>

        </div>
    </div>

    <div class="card-body p-2">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                    <tr>
                        <th class="px-4">Visitor</th>
                        <th>Contact</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th class="text-end px-4">Action</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($Contacts as $contact)

                    <tr>

                        {{-- Visitor --}}
                        <td class="px-4">

                            <div class="d-flex align-items-center">

                                <div class="rounded-circle bg-primary bg-opacity-10
                                        text-primary d-flex align-items-center
                                        justify-content-center me-3" style="width:42px;height:42px;">
                                    {{ strtoupper(substr($contact->name, 0, 1)) }}
                                </div>

                                <div>
                                    <div class="fw-semibold">
                                        {{ $contact->name }}
                                    </div>

                                    @if($contact->phone)
                                    <small class="text-muted">
                                        {{ $contact->phone }}
                                    </small>
                                    @endif
                                </div>

                            </div>

                        </td>


                        {{-- Contact --}}
                        <td>

                            <a href="mailto:{{ $contact->email }}" class="text-decoration-none">

                                {{ $contact->email }}

                            </a>

                            @if($contact->phone)
                            <div class="small text-muted mt-1">
                                {{ $contact->phone }}
                            </div>
                            @endif

                        </td>


                        {{-- Subject --}}
                        <td>
                            <span class="fw-semibold">
                                {{ $contact->subject ?? 'No subject' }}
                            </span>
                        </td>


                        {{-- Message --}}
                        <td style="max-width:260px;">

                            <div class="text-muted text-truncate" style="max-width:240px;">

                                {{ $contact->message }}

                            </div>

                        </td>


                        {{-- Status --}}
                        <td>

                            @if($contact->status === 'unread')

                            <span class="badge bg-warning text-dark">
                                <i class="bi bi-circle-fill small me-1"></i>
                                Unread
                            </span>

                            @else

                            <span class="badge bg-success">
                                <i class="bi bi-check-circle me-1"></i>
                                Read
                            </span>

                            @endif

                        </td>


                        {{-- Date --}}
                        <td>

                            <div class="fw-semibold">
                                {{ $contact->created_at->format('d M Y') }}
                            </div>

                            <small class="text-muted">
                                {{ $contact->created_at->format('h:i A') }}
                            </small>

                        </td>


                        {{-- Action --}}
                        <td class="text-end px-5">

                            <div class="dropdown">

                                <button class="btn btn-sm btn-success border" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end">

                                    <li>
                                        <a class="dropdown-item" href="{{ route('show-user', $contact->id) }}">
                                            <i class="bi bi-eye me-2"></i>
                                            View Message
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="mailto:{{ $contact->email }}">
                                            <i class="bi bi-reply me-2"></i>
                                            Reply
                                        </a>
                                    </li>

                                    @if($contact->status === 'unread')

                                    <li>
                                        <form method="POST"
                                            action="{{ route('contact.read', $contact->id) }}?subject=Re: Your Contact Message">
                                            @csrf
                                            @method('PATCH')

                                            <button type=" submit" class="dropdown-item">
                                                <i class="bi bi-check2 me-2"></i>
                                                Mark as Read
                                            </button>
                                        </form>
                                    </li>

                                    @endif

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <form method="POST" action="{{ route('delete-user', $contact->id) }}}}"
                                            onsubmit="return confirm('Delete this message?')">
                                            @csrf
                                            @method('Delete')

                                            <button class="dropdown-item text-danger">
                                                <i class="bi bi-trash me-2"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="7" class="text-center py-5">

                            <div class="mb-3">
                                <i class="bi bi-envelope-open fs-1 text-muted"></i>
                            </div>

                            <h5 class="fw-semibold">
                                No messages found
                            </h5>

                            <p class="text-muted mb-0">
                                Contact messages from your portfolio
                                will appear here.
                            </p>

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

    {{-- Pagination --}}
    @if($Contacts->hasPages())

    <div class="card-footer bg-white border-0 py-3">

        {{ $contacts->withQueryString()->links() }}

    </div>

    @endif

</div>

@endsection
{{-- Filters --}}