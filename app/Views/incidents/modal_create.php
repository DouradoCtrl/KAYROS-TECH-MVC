<!-- Modal -->
<div class="modal fade" id="incidentModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"> <!-- Cor de fundo e texto -->
            <div class="modal-header border-0">
                <h5 class="modal-title" id="modalLabel">Adicionar Incidente</h5>
                <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="modal" aria-label="Close"></button> <!-- Alterei o botão para branco -->
            </div>
            <div class="modal-body">
                <form method="post" action="/incidents/store">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="nome_switch">Nome Switch:</label>
                        <select class="form-control" name="nome_switch" required>
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
                        <label for="descricao">Descrição:</label>
                        <textarea class="form-control" name="descricao" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" name="status" required>
                            <option value="Pendente">Pendente</option>
                            <option value="Concluído">Concluído</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="data_incidente">Data Incidente:</label>
                        <input type="date" class="form-control" name="data_incidente" required>
                    </div>
                    <div class="form-group">
                        <label for="hora_incidente">Hora Incidente:</label>
                        <input type="time" class="form-control" name="hora_incidente" required>
                    </div>
                    <div class="form-group">
                        <label for="data_incidente_fim">Data Incidente Fim:</label>
                        <input type="date" class="form-control" name="data_incidente_fim">
                    </div>
                    <div class="form-group">
                        <label for="hora_incidente_fim">Hora Incidente Fim:</label>
                        <input type="time" class="form-control" name="hora_incidente_fim">
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
