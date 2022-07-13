</script>
@if (Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            @section('script')
                <script>
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });


                        Toast.fire({
                            icon: 'success',
                            title: '{{ $msg }}'
                        });

                    });
                </script>
            @endsection
        @endforeach
    @else
        @section('script')
            <script>
                $(function() {
                    var Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });


                    Toast.fire({
                        icon: 'success',
                        title: '{{ $data }}'
                    });


                });
            </script>
        @endsection
    @endif
@endif
