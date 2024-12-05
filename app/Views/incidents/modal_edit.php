<!-- Modal de Edição -->
<div class="modal fade" id="editIncidentModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"> <!-- Cor de fundo e texto -->
            <div class="modal-header border-0">
                <h5 class="modal-title" id="editModalLabel">Editar Incidente</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Botão de fechar -->
            </div>
            <div class="modal-body">
                <form method="post" action="/incidents/update" id="editIncidentForm">
                    <input type="hidden" name="id" id="editIncidentId"> <!-- Campo oculto para ID -->
                    <div class="form-group">
                        <label for="editNome">Nome:</label>
                        <input type="text" class="form-control" name="nome" id="editNome" required>
                    </div>
                    <div class="form-group">
                        <label for="editNomeSwitch">Nome Switch:</label>
                        <select class="form-control" name="nome_switch" id="editNomeSwitch" required>
                            <option value="SW-DF100">SW-DF100</option>
                            <option value="SW-ESTANCIA">SW-ESTANCIA</option>
                            <option value="SW-JARDINS">SW-JARDINS</option>
                            <option value="SW-MARAJO">SW-MARAJO</option>
                            <option value="SW-PATIO">SW-PATIO</option>
                            <option value="SW-SOF">SW-SOF</option>
                            <option value="SW-VALE">SW-VALE</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editDescricao">Descrição:</label>
                        <textarea class="form-control" name="descricao" id="editDescricao" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editStatus">Status:</label>
                        <select class="form-control" name="status" id="editStatus" required>
                            <option value="Pendente">Pendente</option>
                            <option value="Concluído">Concluído</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editDataIncidente">Data Incidente:</label>
                        <input type="date" class="form-control" name="data_incidente" id="editDataIncidente" required>
                    </div>
                    <div class="form-group">
                        <label for="editHoraIncidente">Hora Incidente:</label>
                        <input type="time" class="form-control" name="hora_incidente" id="editHoraIncidente" required>
                    </div>
                    <div class="form-group">
                        <label for="editDataIncidenteFim">Data Incidente Fim:</label>
                        <input type="date" class="form-control" name="data_incidente_fim" id="editDataIncidenteFim">
                    </div>
                    <div class="form-group">
                        <label for="editHoraIncidenteFim">Hora Incidente Fim:</label>
                        <input type="time" class="form-control" name="hora_incidente_fim" id="editHoraIncidenteFim">
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-button');
    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            document.getElementById('editIncidentId').value = this.getAttribute('data-id');
            document.getElementById('editNome').value = this.getAttribute('data-nome');
            document.getElementById('editNomeSwitch').value = this.getAttribute('data-nome_switch');
            document.getElementById('editDescricao').value = this.getAttribute('data-descricao');
            document.getElementById('editStatus').value = this.getAttribute('data-status');
            document.getElementById('editDataIncidente').value = this.getAttribute('data-data_incidente');
            document.getElementById('editHoraIncidente').value = this.getAttribute('data-hora_incidente');
            document.getElementById('editDataIncidenteFim').value = this.getAttribute('data-data_incidente_fim');
            document.getElementById('editHoraIncidenteFim').value = this.getAttribute('data-hora_incidente_fim');
        });
    });
});
</script> -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.edit-button');
    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            document.getElementById('editIncidentId').value = id;

            // Atualiza a ação do formulário para incluir o ID
            document.getElementById('editIncidentForm').action = `/incidents/update/${id}`;

            // Preenche os campos do formulário com os dados do incidente
            document.getElementById('editNome').value = this.getAttribute('data-nome');
            document.getElementById('editNomeSwitch').value = this.getAttribute('data-nome_switch');
            document.getElementById('editDescricao').value = this.getAttribute('data-descricao');
            document.getElementById('editStatus').value = this.getAttribute('data-status');
            document.getElementById('editDataIncidente').value = this.getAttribute('data-data_incidente');
            document.getElementById('editHoraIncidente').value = this.getAttribute('data-hora_incidente');
            document.getElementById('editDataIncidenteFim').value = this.getAttribute('data-data_incidente_fim');
            document.getElementById('editHoraIncidenteFim').value = this.getAttribute('data-hora_incidente_fim');
        });
    });
});
</script>



