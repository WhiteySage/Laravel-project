@extends('admin.layouts.app_admin')

@section('content')

<div class="container">


  <hr>


  <table class="table table-striped">
    <thead>
      <th>Наименование</th>
      <th>Публикация</th>
      <th class="text-right">Действие</th>
    </thead>
    <tbody>
      @forelse ($articles as $article)
        <tr>
          <td>{{$article->title}}</td>
          <td>{{$article->published}}</td>
          <td>
            <a href="{{route('Admin.articles.edit', ['id'=>$article->id])}}"><i class="fa fa-edit"></i></a>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

@endsection
