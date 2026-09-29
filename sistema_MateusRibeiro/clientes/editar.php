<section class="section">
    <div class="container">
        <h1 class="title">Editar Cliente</h1>
        
        <form method="POST">
            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">Responsável *</label>
                        <div class="control">
                            <input class="input" type="text" name="responsavel" value="#" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Nome Fantasia *</label>
                        <div class="control">
                            <input class="input" type="text" name="nome_fantasia" value="#" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Tipo *</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select name="tipo" required>
                                    <option value="CPF">CPF</option>
                                    <option value="CNPJ">CNPJ</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Documento *</label>
                        <div class="control">
                            <input class="input" type="text" name="documento" value="#" required>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="field">
                        <label class="label">Endereço *</label>
                        <div class="control">
                            <textarea class="textarea" name="endereco" required>#</textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Telefone *</label>
                        <div class="control">
                            <input class="input" type="text" name="telefone" value="#" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">E-mail *</label>
                        <div class="control">
                            <input class="input" type="email" name="email" value="#" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-primary" type="submit">Atualizar Cliente</button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include '../includes/footer.php'; ?>