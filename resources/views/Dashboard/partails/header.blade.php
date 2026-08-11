@include('partails.header')

<div class="container-fluid py-4">

    {{-- Page Header --}}
    <div
        class="d-flex flex-column flex-md-row justify-content-between align-items-center p-3 mb-4 bg-secondary text-white">
        <div>
            <h2 class="fw-bold ">Contact Messages</h2>
            <p class="text-white mb-0">
                Manage messages received from your portfolio visitors.
            </p>
        </div>

        <div class="d-flex gap-2">
            <button class="btn btn-success">
                <i class="bi bi-download me-1"></i>
                Export
            </button>
        </div>
    </div>

    {{-- Statistics --}}
    <div class="row g-3 mb-4">

        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Total Messages</p>
                            <h3 class="fw-bold mb-0">
                                {{ $Contacts->count() }}
                            </h3>
                        </div>

                        <div class="bg-primary bg-opacity-15 text-primary rounded-3 p-3">
                            <i class="bi bi-envelope fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Unread</p>
                            <h3 class="fw-bold mb-0">
                                {{ $Contacts->where('status', 'unread')->count() }}
                            </h3>
                        </div>

                        <div class="bg-warning bg-opacity-15 text-warning rounded-3 p-3">
                            <i class="bi bi-envelope-exclamation fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">Read</p>
                            <h3 class="fw-bold mb-0">
                                {{ $Contacts->where('status', 'read')->count() }}
                            </h3>
                        </div>

                        <div class="bg-success bg-opacity-15 text-success rounded-3 p-3">
                            <i class="bi bi-envelope-open fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="text-muted mb-1">This Month</p>
                            <h3 class="fw-bold mb-0">
                                {{ $Contacts->where('created_at', '>=', now()->startOfMonth())->count() }}
                            </h3>
                        </div>

                        <div class="bg-info bg-opacity-15 text-info rounded-3 p-3">
                            <i class="bi bi-calendar3 fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>