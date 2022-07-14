@if ($message = Session::get("success"))

<div class="bg-success text-white p-2 mt-4">
    {{$message}}
</div>

@elseif ($message = Session::get("error"))

<div class="bg-danger text-white p-2 mt-4">
    {{$message}}
</div>

@endif