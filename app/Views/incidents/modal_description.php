<!-- Modal -->

<div class="modal fade" id="descriptionModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="modalLabel">Descrição do Incidente</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Este é o espaço onde a descrição será atualizada dinamicamente -->
                <p id="modalDescription">Descrição aqui...</p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript para passar a descrição para o modal -->
<script>
    // Seleciona todos os botões com a classe .btn-description
    var buttons = document.querySelectorAll('.btn-description');

    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Obtém a descrição do atributo do botão clicado
            var descricao = button.getAttribute('data-descricao');

            // Passa a descrição para o parágrafo dentro do modal
            document.getElementById('modalDescription').textContent = descricao;
        });
    });
</script>