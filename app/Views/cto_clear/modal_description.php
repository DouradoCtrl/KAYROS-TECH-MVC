<!-- Modal -->
<div class="modal fade" id="reasonModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="modalLabel">Motivo do Incidente</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Este é o espaço onde o motivo será atualizado dinamicamente -->
                <p id="modalReason">Motivo aqui...</p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript para passar o motivo para o modal -->
<script>
    // Seleciona todos os botões com a classe .btn-reason
    var buttons = document.querySelectorAll('.btn-reason');

    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Obtém o motivo do atributo do botão clicado
            var motivo = button.getAttribute('data-motivo');

            // Passa o motivo para o parágrafo dentro do modal
            document.getElementById('modalReason').textContent = motivo;
        });
    });
</script>