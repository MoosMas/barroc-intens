@extends('layouts.base')

@section('content')
    <h1>Factuur aanpassen</h1>
    <form action=""></form>
    <form method="post" action="{{route('invoices.update', $invoice)}}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Bedrijf</label>
            <input value="{{$invoice->company->name}}"type="text" name="company" class="form-control" >
        </div>

        <div class="form-group">
            <label for="">Datum aangemaakt</label>
            <input value="{{$invoice->created_at}}" type="date" name="created_at" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Datum betaald</label>
            <input value="{{$invoice->paid_at ?? '-'}}" type="date" name="paid_at" class="form-control">
        </div>

        <input type="submit" value="Opslaan" class="btn btn-primary mb-3">
        <form action=""></form>
        <form method="POST" action="{{route('invoices.destroy', $invoice)}}">
            @csrf
            @method('delete')
            <input class="btn btn-danger" type="submit" value="Delete">
        </form>

    </form>
@endsection
