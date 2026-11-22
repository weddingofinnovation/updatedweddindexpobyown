<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>

    <nav class="p-4 shadow flex justify-between">
        <h2>Dashboard</h2>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <div class="p-6">
        <h1>Welcome, {{ auth()->user()->name }}</h1>
        <p>You are logged in check.</p>
    </div>

    <div class="pt-5 pb-1 my-2 my-md-4"> 
        <div class="container-fluid pt-3">
           <div class="row">
    
            <div class="col-3 d-none d-md-block bg-light">
                <div class="d-flex flex-column p-0 bg-white shadow-sm sidebar-menu" style="height: 82vh;">
                    <!-- Navigation Menu -->
                    <ul class="nav nav-pills flex-column m-1">
    
                        <li class="nav-item mb-1">
                            <a href="https://exhibition.org.in/admin/global" class="nav-link text-dark">
                                Dashboard
                            </a>
                        </li>
                                                <li class="nav-item mb-1">
                                <a href="#" class="nav-link text-dark">
                                    Leads
                                </a>
                            </li>
    
                            <li class="nav-item mb-1">
                                <a href="#" class="nav-link text-dark">Event</a>
                            </li>
    
                            <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                                <a href="#" class="nav-link text-dark">Job</a>
                                <span class="">2</span>
                            </li>
    
                            <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                                <a href="#" class="nav-link text-dark">Blog</a>
                                <span class="badge bg-danger rounded-pill">2</span>
                            </li>
    
                            <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                                <a href="#" class="nav-link text-dark">Venue</a>
                                <span class="badge bg-danger rounded-pill">2</span>
                            </li>
    
                            <li class="nav-item mb-1">
                                <a href="#" class="nav-link text-dark">
                                    Call Center
                                </a>
                            </li>
    
                            <li class="nav-item mb-1">
                                <a href="#" class="nav-link text-dark">
                                    Tasks
                                </a>
                            </li>
                            <li class="nav-item mb-1">
                                <a href="#" class="nav-link text-dark">
                                    Communication
                                </a>
                            </li>
                            
                            <li class="nav-item mb-1">
                                <a href="#" class="nav-link text-dark">
                                    reports
                                </a>
                            </li>
    
                        
                    </ul>
                </div>
            </div>
    
            <div class="col-9 col-md-9">
                <div class="my-0">
                                    <div class="row">
                        <div class="col-9">
                            <input type="text" class="form-control mb-2" placeholder="Search..." wire:model.lazy="searchTerm">
                        </div>
    
                        <div class="col-3  border-start">
                            <a href="javascript:void(0)" class="text-dark me-2" data-bs-toggle="collapse" data-bs-target="#searchBox" aria-expanded="false" aria-controls="searchBox">
                                <i class="bi bi-search"></i>
                            </a>
                            <a href="javascript:void(0)" class="text-dark me-2" data-bs-toggle="collapse" data-bs-target="#searchBox" aria-expanded="false" aria-controls="searchBox">
                                <i class="bi bi-download"></i>
                            </a>
                            <a href="javascript:void(0)" class="text-dark me-2" data-bs-toggle="collapse" data-bs-target="#searchBox" aria-expanded="false" aria-controls="searchBox">
                                <i class="bi bi-plus"></i>
                            </a>
                            <a href="javascript:void(0)" class="text-dark me-2" data-bs-toggle="collapse" data-bs-target="#searchBox" aria-expanded="false" aria-controls="searchBox">
                                <i class="bi bi-upload"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="card shadow-sm">
    
                        <div class="card-body">
    
                            
                            <input type="file" class="form-control mb-2" wire:model="file">
    
                            <button class="btn btn-primary" wire:click="upload">
    
                                Upload Excel
    
                            </button>
    
                        </div>
    
                    </div>
                    
                                </div>
            </div>
    
        </div>
        </div>
    </div>
    
    @livewireScripts
</body>

</html>