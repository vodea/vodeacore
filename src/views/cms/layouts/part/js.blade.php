<!-- plugins:js -->
<script src="{{ asset('/assets/vodea/vodeacore/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/vendors/js/vendor.bundle.addons.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{ asset('/assets/vodea/vodeacore/vendors/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/vendors/tinymce/themes/modern/theme.js') }}"></script>

<script src="{{ asset('/assets/vodea/vodeacore/vendors/ladda/js/ladda.jquery.min.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/vendors/ladda/js/spin.min.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/vendors/ladda/js/ladda.min.js') }}"></script>

<script src="{{ asset('/assets/vodea/vodeacore/vendors/autonumeric/autoNumeric.min.js') }}"></script>

<script src="{{ asset('/assets/vodea/vodeacore/vendors/chartjs/Chart.bundle.min.js') }}"></script>

<script src="{{ asset('/assets/vodea/vodeacore/vendors/pluralize/pluralize.js') }}"></script>
<!-- End plugin js for this page-->

<!-- inject:js -->
<script src="{{ asset('/assets/vodea/vodeacore/js/shared/off-canvas.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/js/shared/hoverable-collapse.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/js/shared/misc.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/js/shared/settings.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/js/shared/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('/assets/vodea/vodeacore/js/dashboard.js') }}"></script>

<script src="{{ asset('/assets/vodea/vodeacore/js/util.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/js/form-engine.autocomplete.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/js/form-engine.js') }}"></script>
<script src="{{ asset('/assets/vodea/vodeacore/js/datatable.js') }}"></script>
<!-- End custom js for this page-->


@if(session()->has('notification'))
    <script>
        var notification = {!! session()->get('notification') !!}

        $(window).on('load', function() {
            showNotification(notification.type, notification.title , notification.message, notification.position);
        });
    </script>
@endif
