@extends('layouts.skeleton')
@section('title', 'Index')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Sent</h3>
                    {{-- <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Email</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Inbox
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section mt-3">
            <div class="card">
                <div class="card-header">
                    {{-- <h4 class="card-title">About Vertical Navbar</h4> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th class="text-center">From User</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Message</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">Michael Right</td>
                                    <td class="text-center">$15/hr</td>
                                    <td class="text-center">UI/UX</td>
                                    <td class="text-center">UI/UX</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
