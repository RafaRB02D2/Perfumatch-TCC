
<div class="form-box">

    <form method="POST" enctype="multipart/form-data">

        <!-- NOME DA NOTA -->
        <div class="form-group">

            <label for="nome">
                Nome da nota
            </label>

            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Ex: Morango"
                required
            >

        </div>


        <!-- IMAGEM DA NOTA -->
        <div class="form-group">

            <label for="imagem">
                Imagem da nota
            </label>

            <input
                type="file"
                id="imagem"
                name="imagem"
                accept=".jpg,.jpeg,.png,.webp"
                required
            >

            <small>
                Selecione uma imagem JPG, JPEG, PNG ou WEBP.
            </small>

        </div>


        <!-- DESCRIÇÃO -->
        <div class="form-group">

            <label for="descricao">
                Descrição da nota
            </label>

            <textarea
                id="descricao"
                name="descricao"
                placeholder="Ex: O morango traz um aroma frutado, doce e suculento..."
                required
            ></textarea>

        </div>


        <!-- BOTÃO -->
        <button type="submit" class="botao">
            Adicionar Nota
        </button>

    </form>

</div>
