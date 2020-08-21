<!DOCTYPE html>
<html lang="en">
@include('front.layouts.include.head')
@yield('head')

<body>

@include('front.layouts.include.header')

@yield('content')

<!-- Footer -->
@include('front.layouts.include.footer')


@include('front.layouts.include.foot')
@yield('foot')

<script>
    function checkDeleteConfrim(url,parentId) {
        swal({
            title: "Silmək istədiynizdən əminsizmi?",
            text: "Silinəndən sonra bu əməliyyatı bərpa edə bilməyəcəksiniz!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    location.href = url;
                } else {
                    swal("Heç bir əməliyyat aparılmadı");
                }
            });


    }
</script>

</body>

</html>
