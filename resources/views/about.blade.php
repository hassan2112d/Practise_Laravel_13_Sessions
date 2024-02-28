@extends('layouts.main')



@section('container')
<h2>About Page</h2>
    @verbatim
    <div id="app">{{message}}</div>

    @endverbatim


<a href="/">Home </a>

@endsection
@push('script')
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>


    <script>
        const { createApp } = Vue

        createApp({
            data() {
                
                return {
                    message : 'Hello'
                }
            }
        }).mount('#app')
    </script>
@endpush
