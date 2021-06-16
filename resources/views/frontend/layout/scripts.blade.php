<script src="{{asset('js/jquery3.6.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.ru.min.js" integrity="sha512-tPXUMumrKam4J6sFLWF/06wvl+Qyn27gMfmynldU730ZwqYkhT2dFUmttn2PuVoVRgzvzDicZ/KgOhWD+KAYQQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $('.datepicker').datepicker({
        "format":"dd/mm/yyyy",
        language: 'ru'
    });
    $('.skill').select2({
        tags:true,
        multiple:true
    });
    ClassicEditor
        .create( document.querySelector( '#about' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );

       let errors  = <?php echo ($errors->any() == true ? 1 : 0);?>;
       let success  = <?php echo (\Illuminate\Support\Facades\Session::has("success") == true ? 1 : 0);?>;
       let login  = <?php echo (\Illuminate\Support\Facades\Session::has("fail") == true ? 1 : 0);?>;

       if(errors){
           $("#gridSystemModal").modal("show");
       }
       if(success){
           Swal.fire(
               'Ура!',
                "Выполнено успешно!",
               'success'
           )
       }

    if(login){
        Swal.fire(
            'Ура!',
            "Выполнено успешно!",
            'success'
        )
    }
    if (login){
        Swal.fire({
            icon: 'error',
            title: 'Упс...',
            text: 'Неверный логин или пароль!',
        })
    }


</script>
