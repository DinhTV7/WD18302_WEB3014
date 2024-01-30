{{-- 
    file tôi sẽ kế thừa lại giao diện của trang 
    main trong thư mục layout
 --}}
@extends('layout.main')
@section('content')
<h1>Xin chào năm mới</h1>
{{ $title }}

@foreach ($arr as $key => $item)
    <p>{{ $item['name'] }}</p>
@endforeach

@if

@endif
<?php 
    // var_dump($arr);
?>
@endsection