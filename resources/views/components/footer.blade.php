<footer class="mt-auto text-center py-3">
    @php
    $current_year = date("Y");
    $until_year = 2023!=$current_year ? "-".$current_year : "";
    @endphp
    <span>&copy; 2023{{ $until_year }} fuadmln, Inc.</span>
</footer>