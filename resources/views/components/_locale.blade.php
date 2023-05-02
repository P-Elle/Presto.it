<form class="d-inline px-3 px-lg-0" action="{{route ('setLocale', $lang)}}" method="post">

    @csrf

    <button type="submit" class="btn p-0 m-0">
        <img src="{{asset ('vendor/blade-flags/language-' . $lang . '.svg')}}" width="25" height="25">
    </button>


</form>
