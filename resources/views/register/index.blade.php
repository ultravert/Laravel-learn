@extends('layouts.auth ')

@section('page.title', 'Регистрация')

@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{__('Регистрация')}}
            </x-card-title>
        </x-card-header>

        <x-card-body>
            <x-form action="{{ route('register.store') }}" method="POST">
                <x-form-item>
                    <x-lable required>{{ __('Имя') }}</x-lable>
                    <x-input name="name" autofocus/>
                </x-form-item>

                <x-form-item>
                    <x-lable required>{{ __('Email') }}</x-lable>
                    <x-input type="email" name="email"/>
                </x-form-item>

                <x-form-item>
                    <x-lable required>{{ __('Пароль') }}</x-lable>
                    <x-input type="password" name="password"/>
                </x-form-item>

                <x-form-item>
                    <x-lable required>{{ __('Пароль еще раз') }}</x-lable>
                    <x-input type="password" name="password_confirmation"/>
                </x-form-item>

                <x-form-item>
                    <x-checkbox name="remember">
                        {{ __('Я согласен на обработку пользовательских данных') }}
                    </x-checkbox>
                </x-form-item>

                <x-button type="submit">
                    {{ __('Войти') }}
                </x-button>
            </x-form>
        </x-card-body>
    </x-card>
@endsection
