<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
            <div class="page-wrapper  p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6" >
            <div class="card-body">
                <form method="POST" action="{{route('products.store')}}">
                    <div class="form-row">
                        <div class="name">Nama</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="full_name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Universitas</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="universitas">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Tanggal lahir</div>
                        <div class="value">
                            <input class="input--style-6" type="date" name="date">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Alamat</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="Alamat">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email address</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Motivation letter</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="input-file" type="file" name="file_cv" id="file">
                                <label class="label--file" for="file">Choose file</label>
                                <span class="input-file__info">No file chosen</span>
                            </div>
                            <div class="label--desc">Max file size 50 MB</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Upload CV</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="input-file" type="file" name="file_cv" id="file">
                                <label class="label--file" for="file">Choose file</label>
                                <span class="input-file__info">No file chosen</span>
                            </div>
                            <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn btn--radius-2 btn--blue-2" type="submit" action="{{route('products.create')}}">Send Application</button>
            </div>
        </div>
    </div>
</div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
