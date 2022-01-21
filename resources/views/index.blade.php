<x-layout>
    @slot('title', 'Home')
    @slot('body')

        <div id="demo"></div>

        @include('include.requiters')

    @endslot

</x-layout>


<script>
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("GET", "{{ route('main-index') }}", true);
    xhttp.send();
</script>
