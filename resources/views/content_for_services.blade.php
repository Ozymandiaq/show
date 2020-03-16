@extends('layouts.app')


@section('content')
<div class="adminTitle margin_bottom_1_5em">
    <a href="{{ route('index') }}">
        <img src="{{ asset('img/logo.png') }}" class = "adminLogo">
    </a>
    <h1>Административная панель</h1>
</div>

<div class="blockTitle margin_bottom_1_5em">Вы редактируете блок "Оборудование и команда". Здесь Вы можете:</div>

<div class="block_menuItem margin_bottom_1_5em">
    <button class="btn paddingLeft_2em imglistShow imglistShow__active">Загрузить или удалить фото. <br>(Все поля обязательны для заполнения).</button>
    <button class="btn paddingLeft_2em videolistShow">Загрузить или удалить видео. <br> (Все поля обязательны для заполнения).</button>
</div>
<div class="adminWrap margin_bottom_1_5em">

    <div class="contentWrap margin_bottom_1_5em">
        <div class="services_content">
            <div class="services_content__img services_content__img__active">

                <form id="imgForm" action="{{ route('content_for_services.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="margin_bottom_1_5em">1) Выберите категорию
                        <select name = "category_name">
                            <option value = "Звук" selected>Звук</option>
                            <option value = "Свет">Свет</option>
                            <option value = "LED дисплеи">LED дисплеи</option>
                            <option value = "Сценические конструкции">Сценические конструкции</option>
                            <option value = "Технический продакшн">Технический продакшн</option>
                            <option value = "Технические специалисты">Технические специалисты</option>
                        </select>
                    </div>
                    <div class="margin_bottom_1_5em">
                        2) Загрузите фото <input type="file" name="image" accept = "image/*">
                    </div>



        {{-- <label for="1"> <input value = "1" type="radio" id="1" name="is_active" checked="checked">Показывать</label>
        <label for="0"><input value = "0" type="radio" id="0" name="is_active">Не показывать</label> --}}
                    <div class="margin_bottom_1_5em">
                        3) Подтвердите выбор
                        <button class="btn" type="submit">Загрузить</button>
                    </div>

                </form>

                @isset($contentInServices)
                    <div class="blockTitle margin_bottom_1_5em">Добавленные фото</div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Категория, для которой добавлено фото</td><td>Фото</td><td>Удаление фото (это необратимо)</td>
                            </tr>
                            @foreach($contentInServices as $contentInService)
                                @if (!$contentInService->video_url)
                                    <tr>
                                        <td>{{ $contentInService->category_name }}</td><td><img src="/storage/{{ $contentInService->img_url }}" alt="img"></td>
                                        {{-- @if ($contentInService->is_active == 1)
                                            <td>Отображается</td>
                                        @else
                                            <td>Не отображается</td>
                                        @endif --}}
                                        <td>
                                            {{-- <form action="{{ route('content_for_services.destroy', $contentInService->id) }}" method="post">@csrf{{method_field('DELETE')}} <button class="btn btn-danger" type="submit">Удалить</button></form> --}}
                                            {!!Form::open(['route'=> ['content_for_services.destroy',$contentInService->id],'method'=>'DELETE'])!!}
                                            @csrf
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Удалить', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>

                                @endif
                            @endforeach
                        </tbody>
                    </table>
                @endisset

            </div>
            <div class="services_content__video">

                            <form id="imgForm" action="{{ route('content_for_services.store')}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="margin_bottom_1_5em">1) Выберите категорию
                                    <select name = "category_name">
                                        <option value = "Звук" selected>Звук</option>
                                        <option value = "Свет">Свет</option>
                                        <option value = "LED дисплеи">LED дисплеи</option>
                                        <option value = "Сценические конструкции">Сценические конструкции</option>
                                        <option value = "Технический продакшн">Технический продакшн</option>
                                        <option value = "Технические специалисты">Технические специалисты</option>
                                    </select>
                                </div>
                                <div class="margin_bottom_1_5em">
                                    2) Загрузите первью для видео <input type="file" name="image" accept = "image/*">
                                </div>
                                <div class="margin_bottom_1_5em">
                                    3) Загрузите видео <input type="file" name="video" accept = "video/*">
                                </div>



                    {{-- <label for="1"> <input value = "1" type="radio" id="1" name="is_active" checked="checked">Показывать</label>
                    <label for="0"><input value = "0" type="radio" id="0" name="is_active">Не показывать</label> --}}
                                <div class="margin_bottom_1_5em">
                                    4) Подтвердите выбор
                                    <button class="btn" type="submit">Загрузить</button>
                                </div>

                            </form>



                @isset ($contentInServices)
                    <div class="blockTitle margin_bottom_1_5em">Добавленные видео</div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Категория, для которой добалено видео</td><td>Превью для видео</td><td>Удаление видео (это необратимо)</td>
                            </tr>
                            @foreach($contentInServices as $contentInService)
                                @if ($contentInService->video_url)
                                    <tr>
                                        <td>{{ $contentInService->category_name }}</td><td><img src="/storage/{{ $contentInService->img_url }}" alt="img">
                                            {{-- @if ($contentInService->is_active == 1)
                                                <td>Отображается</td>
                                            @else
                                                <td>Не отображается</td>
                                            @endif --}}
                                        <td>
                                            {{-- <form action="{{ route('content_for_services.destroy')-> with('contentInService', $id) }}" method="post">@csrf{{method_field('DELETE')}} <button class="btn btn-danger" type="submit">Удалить</button></form> --}}
                                            {!!Form::open(['route'=> ['content_for_services.destroy',$contentInService->id],'method'=>'DELETE'])!!}
                                                @csrf
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Удалить', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                        </tbody>
                    </table>
                @endisset
            </div>


        </div>

    </div>
</div>
@endsection
