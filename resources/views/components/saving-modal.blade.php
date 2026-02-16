@props([ 'object','type', 'formId'])

<div class="modal fade" id="confirmSaveModal" tabindex="-1" aria-labelledby="confirmSaveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="confirmSaveModalLabel">Conferma {{ $type }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $type === 'creazione' ? "Vuoi confermare la creazione del nuovo $object?" : "Vuoi confermare la modifica del $object?" }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <button type="submit" form="{{ $formId }}" class="btn btn-primary">Conferma</button>
            </div>
        </div>
    </div>
</div>
