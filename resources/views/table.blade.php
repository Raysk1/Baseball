@extends('default')
@section('title')
    @yield('title')
@endsection
@section('styles')
    @yield('styles')    
@endsection

@section('script')
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://unpkg.com/floatthead"></script>
    <script type="text/javascript">
        var $table = $('table.table');
        $table.floatThead({
            responsiveContainer: function($table) {
                return $table.closest('.table-responsive');
            }
        });
        $table.on("floatThead", function(e, isFloated, $floatContainer) {
            var altura = $("header").height()
            if (isFloated) {
                $floatContainer.addClass("floated"); // the div containing the table containing the thead
                $(this).addClass("floated"); // $table
                $floatContainer.css('marginTop', altura);
            } else {
                $floatContainer.removeClass("floated");
                $(this).removeClass("floated");
                $floatContainer.css('marginTop', 0);
            }
        });
    </script>

    @yield('script')
@endsection

@section('content')
    <div class="container">
        <div class=" mt-1">
            <a href="@yield('createRoute')" class="btn btn-primary mb-3 w-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                Agregar
            </a>
            <div class="table-responsive text-center">
                <table class="table table-dark">
                    <thead class="border-white ">
                        @yield('thead')
                    </thead>
                    <tbody>
                        @yield('tbody')
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
