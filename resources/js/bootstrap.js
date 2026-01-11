import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

<script>
$('#confirmModal').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget)

    let action = button.data('action')
    let method = button.data('method')

    if (!action) {
        console.error('Confirm modal action is missing')
        return
    }

    $('#confirmModalTitle').text(button.data('title'))
    $('#confirmModalBody').text(button.data('body'))
    $('#confirmForm').attr('action', action)
    $('#confirmMethod').val(method)
    $('#confirmBtn').text(button.data('btn'))
})
</script>
