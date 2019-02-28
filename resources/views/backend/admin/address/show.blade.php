@extends('backend.layouts.master')

@section('content')

<div class="container">
    <div class="high">
        <a>{{ trans('province.listProvince') }}</a>
    <a href="{{ route('province.create') }}"><button class="button">{{ trans('province.addProvince') }}</button></a>
    </div>
    <table>
        <tr>
            <th>#</th>
            <th>{{ trans('province.name') }}</th>
            <th colspan="2">{{ trans('province.action') }}</th>
        </tr>
        @foreach ($provinces as $province)
            <tr>
                <td>{{ $province->id }}</td>
                <td>{{ $province->name }}</td>
                <td><a href="{{ route('province.edit', $province->id) }}">Edit</a></td>
                <td>Delete</td>
            </tr>
        @endforeach
    </table> 
    {!! $provinces -> links() !!}
</div>
@endsection
