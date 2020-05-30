@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Contato</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
        {{ $contacts->links() }}
    </div>

@endsection
