@extends('layouts.app')

@section('content')
<div class="adminTitle margin_bottom_1_5em">
    <a href="{{ route('index') }}">
        <img src="{{ asset('img/logo.png') }}" class = "adminLogo">
    </a>
    <h1>Административная панель</h1>
</div>

<div class="blockTitle margin_bottom_1_5em">Вы редактируете блок "Мероприятия". Здесь Вы можете добавить или удалить меропритие. (Все поля обязательны для заполнения).</div>
<div class="adminWrap">




    <div class="eventsWrap margin_bottom_1_5em">

                <form id="eventForm" action="{{ route('events.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                        <div>1) Выберите категорию
                            <select name = "category_name">
                                <option value = "Концерт" selected>Концерт</option>
                                <option value = "Конференция">Конференция</option>
                                <option value = "Частное мероприятие">Частное мероприятие</option>
                            </select>
                        </div>
                        <div>2) Загрузите фото
                            <input type="file" name="image" accept = "image/*">
                        </div>
                        <div>3) Введите название мероприятия
                            Название <input type="text" name ="title"></div>
                        <div> 4) Введите дату
                           <input type="text" name ="date"></div>
                        <div> 5) Введите локацию
                            Локация <input type="text" name ="location"></div>
                        <div> 6) Введите информацию об оборудовании
                            Оборудование <input type="text" name ="equipment"></div>
                        <div> 7) Введите ссылку на меропритие
                            Ссылка на меропритие<input type="text" name ="url"></div>

                        {{-- <label for="1"> <input value = "1" type="radio" id="1" name="is_active" checked="checked">Показывать</label>
                        <label for="0"><input value = "0" type="radio" id="0" name="is_active">Не показывать</label> --}}
                        <div>8) Подтвердите выбор
                            <button class="btn" type="submit">Загрузить</button>
                        </div>

                </form>
    </div>
    @isset($events)
        <div class="blockTitle margin_bottom_1_5em">Добавленные мероприятия</div>
        <table class="table">
            <tbody>
                <tr>
                    <td>Название категории</td><td>Фото мероприятия</td><td>Название мероприятия</td><td>Дата</td><td>Локация</td><td>Оборудование</td><td>Ссылка мероприятия</td><td>Удаление мероприятия (это необратимо)</td>
                </tr>
                @foreach($events as $event)
                <tr>
                    <td>{{ $event->category_name }}</td><td><img src="/storage/{{ $event->img_url }}" alt="img"></td><td>{{ $event->title }}</td><td>{{ $event->date }}</td><td>{{ $event->location }}</td><td>{{ $event->equipment }}</td><td>{{ $event->url }}</td>
                    <td>
                        {{-- <form action="{{ route('events.index', ['event'=>$event->id] )}}" method="post">@csrf{{method_field('DELETE')}} <button class="btn btn-danger" type="submit">Удалить</button></form> --}}
                        {!!Form::open(['route'=> ['events.destroy',$event->id],'method'=>'DELETE'])!!}
                            @csrf
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Удалить', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

    @endisset
</div>
@endsection
