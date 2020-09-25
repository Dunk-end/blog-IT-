@extends('layouts.app')

@section('title')Страница контактов@endsection

@section('content')
    <h1 align="center">Страница контактов</h1>

        <form action="{{ route('contact-form') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Введите имя</label>
                <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
             <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
           </div>

          <div class="form-group">
              <label for="message">Сообщение</label>
              <textarea name="message"  id="message" class="form-control" placeholder="Введите сообщение"></textarea>
           </div>
            <button  class="p-2 text-dark btn btn-success" type="submit">Отправить</button>
        </form>
@endsection
