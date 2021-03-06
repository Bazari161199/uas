@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card bg-light" style="border: none">
        <div class="button p-3">
        <a class="btn btn-primary float-right" href="{{(route('isi.create'))}}">Create</a>
    </div>
<table class="table table-striped">
    <thead class="text-white">
      <tr class="bg-dark" >
        <th scope="col">No</th>
        <th scope="col">Image</th>
        <th scope="col">Judul</th>
        <th scope="col">Text</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody style="color: black">
        @forelse ($items as $no => $item)
        <tr>
            <th scope="row">{{$no+1}}</th>
            <td>
                <img src="{{Storage::url($item->image)}}" alt="image" style="width: 150px" class="img-thumbnail">
            </td>
            <td>{{$item->judul}}</td>
            <td>{{$item->text}}</td>
            <td>
                <a href="{{ route('isi.edit', $item->id)}}"
                    class="btn btn-outline-warning">Edit</a>
                <a onclick="return confirm('Apakah Anda yakin untuk mengahpus ini?')">
                    <form action="{{ route('isi.destroy', $item->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger">
                        Delete
                    </button>
                    </form>
                </a>
            </td>
          </tr>
        @empty
          <tr>
              <td colspan="4" class="text-center">Data Belum Ada</td>
          </tr>
        @endforelse


    </tbody>
  </table>
  </div>
</div>
@endsection
