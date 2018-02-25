@extends('Layouts.default')

@section('content')
    <div>
        <div class="card mt-3">
    <table style="width:100%"  >
        <tr>
            <th>Name</th>
            <th>Message</th>
            <th> </th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>My name is Jill </td>
            <td><button type="submit" class="btn btn-primary col-lg-6">Delete</button></td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>My name is Eve </td>
            <td><button type="submit" class="btn btn-primary col-lg-6">Delete</button></td>
        </tr>
    </table>
        </div></div>
@endsection