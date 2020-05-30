@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Campanha</th>
            </tr>
            </thead>
            <tbody>
            @foreach($campaings as $campaign)
                <tr>
                    <td>{{ $campaign->title }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
