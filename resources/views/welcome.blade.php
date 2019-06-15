@extends('layouts.master', ['title' => 'Welcome'])
    @section("content")
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel Tuto
                    @if (5 ==3)
                        {{ "Booooooom" }}

                    @elseif (5 == 5)
                        {{ "Yesssss" }}
                        {{ $name }}
                    @endif
                </div>
            </div>
        </div>
    @stop
