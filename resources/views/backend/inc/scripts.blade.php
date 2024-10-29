<script src="{{ staticAsset('backend/assets/js/libs/jquery-3.6.4.min.js') }}"></script>


<!-- localizations & others -->
<script>
    'use strict';

    var TT = TT || {};

    TT.baseUrl = '{{ \Request::root() }}';


</script>

<!-- media-manager scripts -->
@include('backend.inc.uppyScripts')
