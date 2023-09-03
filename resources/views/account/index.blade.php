@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-3">Accounts</h2>
                <hr>
                <table class="table">
                    <thead>
                        <tr class="table-danger">
                            <th>#</th>
                            <th>number</th>
                            <th>currency</th>
                            <th>balance</th>
                            <th>created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($accounts as $item)
                            <tr>
                                <td><a href="{{ route('account.show', $item->id) }}">{{ $i }}</a></td>
                                <td>{{ $item->number }}</td>
                                <td>{{ $item->currency }}</td>
                                <td>{{ $item->balance }}</td>
                                <td>{{ $item->created_at->format('d/m/Y - h:i a') }}</td>
                            </tr>
                            @php
                                ++$i;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
