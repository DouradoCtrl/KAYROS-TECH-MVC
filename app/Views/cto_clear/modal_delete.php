<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white"> <!-- Cor de fundo e texto -->
            <div class="modal-header border-0">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Botão de fechar -->
            </div>
            <div class="modal-body border-0">
                Tem certeza que deseja excluir este registro de limpeza?
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Não</button>
                <a href="" id="confirmDeleteBtn" class="btn btn-danger btn-sm">Sim, excluir</a>
            </div>
        </div>
    </div>
</div>

<script>
    // Escuta o evento de abertura do modal
    var deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        // Botão que acionou o modal
        var button = event.relatedTarget;
        // Extrai o ID do incidente
        var id = button.getAttribute('data-id');
        // Atualiza o link de confirmação no modal
        var confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        confirmDeleteBtn.setAttribute('href', '/cto_clear/delete/' + id);
    });
</script>