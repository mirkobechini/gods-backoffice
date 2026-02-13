@props(['type', 'object'])

<div class="modal fade" id="confirmDeleteModal-{{ $object->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel-{{ $object->id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="confirmDeleteModalLabel-{{ $object->id }}">Confermare eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare "{{ $object->name }}"? Questa azione non può essere
                annullata.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{ route($type . 's.destroy', $object->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
                </form>
            </div>
        </div>
    </div>
</div>
