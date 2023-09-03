@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-3">Account</h2>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User:</th>
                            <th>Number:</th>
                            <th>Currency:</th>
                            <th>Balance:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $account->id }}</td>
                            <td>{{ $account->user->name }}</td>
                            <td>{{ $account->number }}</td>
                            <td>{{ $account->currency }}</td>
                            <td>{{ $account->balance }}</td>
                        </tr>
                    </tbody>
                </table>
                <h2 class="text-center mb-3">Create Transaction</h2>
                <hr>
                <form action="{{ route('transaction.store') }}" method="post">
                    @csrf
                    <input class="form-control" type="hidden" readonly name="account_id" value="{{ $account->id }}"
                        required>
                    <div class="form-group mb-3">
                        <select class="form-control" name="type" id="type" required>
                            <option value="debit">debit</option>
                            <option value="credit">credit</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" type="number" step="0.01" value="0" name="amount"
                            id="amount">
                    </div>
                    <button class="btn btn-danger w-100" type="submit">Save</button>
                </form>
            </div>
            <div class="col-md-6">

                <h2 class="text-center mb-3">Transactions</h2>

                <table class="table">
                    <thead>
                        <tr>
                            <th class="table-danger">#</th>
                            <th class="table-danger">Type:</th>
                            <th class="table-danger">Amount:</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($account->transactions()->orderBy('id', 'DESC')->get() as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->amount }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
